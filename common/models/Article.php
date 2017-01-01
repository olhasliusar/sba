<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $video
 * @property string $lang
 * @property string $author
 * @property integer $role
 * @property integer $broadcast
 * @property integer $show
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property ArticleGenre[] $articleGenres
 * @property Genre[] $genres
 * @property Genre[] $genresList
 * @property Attachment[] $images
 *
 * @property User userCreate
 * @property User userUpdate
 * @property Attachment mainImage
 * @property Attachment allImages
 *
 * @property string $imageActive
 * @property array $removeFiles
 *
 * @property string $shortName
 */
class Article extends ActiveRecord
{
    public $genresform;
    public $images;
    public $imageActive;
    public $removeFiles;

    const ARTICLE_COUNT = 3;
    const ARTICLES_SIDEBAR = 10;
    const ROLE_JOB = 1;
    const ROLE_ARTICLE = 2;

    const SHORT_NAME_LETTERS = 150;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'lang'], 'string'],
            [['role', 'show', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'video', 'author'], 'string', 'max' => 255],
            [['broadcast'], 'default', 'value' => User::STATUS_DELETED],
            [['show'], 'default', 'value' => User::STATUS_ACTIVE],
            [['lang'], 'default', 'value' => Lang::getDefaultLangUrl()],
            [['genresform', 'images', 'imageActive', 'removeFiles'], 'safe'],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at'
                ]
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
//            'name' => 'Name',
//            'text' => 'Text',
//            'video' => 'Video',
//            'lang' => 'Lang',
//            'author' => 'Author',
//            'role' => 'Role',
//            'show' => 'Show',
//            'status' => 'Status',
//            'created_at' => 'Created At',
//            'updated_at' => 'Updated At',
//            'created_by' => 'Created By',
//            'updated_by' => 'Updated By',
//            'genres' => 'Genres',
            'name' => 'Заголовок',
            'text' => 'Текст',
            'video' => 'Видео',
            'lang' => 'Язык',
            'author' => 'Автор',
            'role' => 'Роль',
            'broadcast' => 'Рассылка',
            'show' => 'Публикация',
            'status' => 'Статус',
            'created_at' => 'Создано в',
            'updated_at' => 'Обновлено в',
            'created_by' => 'Создано',
            'updated_by' => 'Изменено',
            'genres' => 'Жанры',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->saveGenres();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleGenres()
    {
        return $this->hasMany(ArticleGenre::className(), ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id' => 'genre_id'])->viaTable('article_genre', ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenresList()
    {
        $genres = $this->genres;
        $list = [];
        foreach ($genres as $genre) {
            $list[] = \Yii::t('genre_t', $genre->name);
        }
        return $list;
    }

    public function getUserCreate()
    {
        return User::findOne($this->created_by);
    }

    public function getUserUpdate()
    {
        return User::findOne($this->updated_by);
    }

    public function getMainImage()
    {
        $images = $this->allImages;
        foreach ($images as $image) {
            if ($image->show == User::STATUS_ACTIVE) {
                return $image;
            }
        }
        return $images ? $images[0] : '';
    }

    public function getAllImages()
    {
        return Attachment::getAttachmentsByType($this, Attachment::TYPE_IMAGE);
    }

    public function changeImages()
    {
        Attachment::upload($this);
        Attachment::changeShowOne($this);
        !empty($this->removeFiles) ? Attachment::removeFiles($this) : '';
        return true;
    }

    public function checkGenre($genreId)
    {
        foreach ($this->articleGenres as $articleGenre) {
            if ($articleGenre->genre_id == $genreId) {
                return 'checked';
            }
        }
        return false;
    }

    public function saveGenres()
    {
        if ($this->articleGenres) {
            foreach ($this->articleGenres as $articleGenre) {
                $articleGenre->delete();
            }
        }

        $genres = explode(',', $this->genresform);
        if (!empty($genres)) {
            foreach ($genres as $item) {
                $genre = new ArticleGenre();
                $genre->article_id = $this->id;
                $genre->genre_id = $item;
                $genre->save();
            }
        }
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this->save();
    }

    public static function getArticlesByCurrentLang($show = User::STATUS_ACTIVE, $role = Article::ROLE_ARTICLE, $limit = null)
    {
        $articles = Article::find()
            ->where([
                'lang' => Lang::getCurrent()->url,
                'role' => $role,
                'status' => User::STATUS_ACTIVE
            ]);

        if ($show) {
            $articles->andWhere(['show' => $show]);
        }

        return $articles->limit($limit)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
    }


    public static function getMenuArticles()
    {
        $articles = Article::getArticlesByCurrentLang(User::STATUS_ACTIVE, Article::ROLE_ARTICLE, Article::ARTICLE_COUNT);
        $menuArticles = [];
        foreach ($articles as $article) {
            $menuArticles[] = [
                'label' => "$article->name",
                'url' => ['/site/article?id=' . $article->id],
                'linkOptions' => [
                    'class' => 'menu-styling',
                ]
            ];
        }
        $menuArticles[] = [
            'label' => '<span><svg class="links__angle-right" viewBox="0 0 11 32" preserveAspectRatio="none"><path class="path1" d="M10.625 17.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411t0.179-0.411l7.018-7.018-7.018-7.018q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411z"></path></svg></span>'
                . \Yii::t('general', 'All articles'),
            'url' => ['/articles'],
            'linkOptions' => [
                'class' => 'menu-styling links__all-articles',
            ]
        ];
        return $menuArticles;
    }

    public function getShortName()
    {
        return strlen($this->name) < self::SHORT_NAME_LETTERS ?
            $this->name :
            mb_substr(strip_tags($this->name), 0, self::SHORT_NAME_LETTERS, "UTF-8") . '...';
    }

    public static function findById($id)
    {
        return static::findOne([
            'id' => $id,
            'status' => User::STATUS_ACTIVE,
        ]);
    }

    public static function createBroadcast($id)
    {
        $article = Article::findById($id);
        $artists = Artist::find();

        if (isset($article->genres)) {
            $genres = $article->genres;
            $genresArr = [];

            foreach ($genres as $genre) {
                $genresArr[] = $genre->id;
            }
            $artistsUnigue = ArtistGenre::find()
                ->where(['genre_id' => $genresArr])
                ->select('artist_id')
                ->groupBy(['artist_id'])
//                ->asArray()
                ->all();

            $artistsId = [];
            foreach ($artistsUnigue as $item) {
                $artistsId[] = $item->artist_id;
            }

            $artists->where([
                'id' => $artistsId
            ]);
        }

        $artists = $artists->all();

        /**
         * @var $artist \common\models\Artist
         */
        foreach ($artists as $artist) {
            $queue = new Queue();
            $queue->subject = $article->name;
            $queue->to_email = $artist->email;
            $queue->content = $article->text;
            if (!$queue->save()) {
                return false;
            }
        }

        $article->broadcast = User::STATUS_ACTIVE;
        $article->save();

        return true;
    }
}
