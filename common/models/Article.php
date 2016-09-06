<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $video
 * @property string $lang
 * @property string $author
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
 * 
 * @property User userCreate
 * @property User userUpdate
 */
class Article extends ActiveRecord
{
    public $genresform;

    const ARTICLE_COUNT = 4;
    
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
            [['show', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'video', 'author'], 'string', 'max' => 255],
            [['show'], 'default', 'value' =>  1],
            [['lang'], 'default', 'value' =>  Lang::getDefaultLangUrl()],
            [['genresform'], 'safe'],
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
        $genres = $this->genresform;
        if (!empty($genres)) {
            foreach ($genres as $item) {
                $genre = new ArticleGenre();
                $genre->article_id = $this->id;
                $genre->genre_id = $item;
                $genre->save();
            }
        }
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
        foreach ($genres as $genre){
            $list[] = \Yii::t('genre_t', $genre->name);
        }
        return $list;
    }


    public function getUserCreate(){
        return User::findOne($this->created_by);
    }

    public function getUserUpdate(){
        return User::findOne($this->updated_by);
    }
    
    public static function getArticlesByCurrentLang($show = User::STATUS_ACTIVE, $limit = null){
        $articles = Article::find()
            ->where(['lang' => Lang::getCurrent()->url]);

        if($show){
            $articles->andWhere(['show' => $show]);
        }

        return $articles->limit($limit)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
    }

    //TODO: url
    public static function getMenuArticles(){
        $articles =  self::getArticlesByCurrentLang(User::STATUS_ACTIVE, self::ARTICLE_COUNT);
        $menuArticles = [];
        foreach ($articles as $article){
            $menuArticles[] = [
                'label' => "$article->name",
                'url' => ['/site/contact'], //id
                'linkOptions' => [
                    'class' => 'menu-styling',
                    'title' => "$article->name",
                ]
            ];
        }
        return $menuArticles;
    }
}
