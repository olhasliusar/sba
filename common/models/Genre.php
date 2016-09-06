<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "genre".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property ArticleGenre[] $articleGenres
 * @property Article[] $articles
 * @property ArtistGenre[] $artistGenres
 * @property Artist[] $artists
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleGenres()
    {
        return $this->hasMany(ArticleGenre::className(), ['genre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])->viaTable('article_genre', ['genre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtistGenres()
    {
        return $this->hasMany(ArtistGenre::className(), ['genre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtists()
    {
        return $this->hasMany(Artist::className(), ['id' => 'artist_id'])->viaTable('artist_genre', ['genre_id' => 'id']);
    }


//    public static function getAll()
//    {
//        return self::find()->where(['status' => 1])->all();
//    }

    public static function getAllArr()
    {
        $genreArray = ArrayHelper::map(Genre::find()->where(['status' => 1])->all(), 'id', 'name');
        $genres = [];
        foreach ($genreArray as $key => $elem) {
            $genres[$key] = \Yii::t('genre_t', $elem);
        }
        return $genres;
    }

}
