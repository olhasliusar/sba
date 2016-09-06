<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "artist_genre".
 *
 * @property integer $artist_id
 * @property integer $genre_id
 *
 * @property Artist $artist
 * @property Genre $genre
 */
class ArtistGenre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist_genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist_id', 'genre_id'], 'required'],
            [['artist_id', 'genre_id'], 'integer'],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'artist_id' => 'Artist ID',
            'genre_id' => 'Genre ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artist::className(), ['id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }
}
