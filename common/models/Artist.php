<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "artist".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property ArtistGenre[] $artistGenres
 * @property Genre[] $genres
 * @property Attachment[] $images
 *
 * @property integer $birth
 * @property string $height_weight
 * @property string $bust_waist_hips
 * @property string $country_city
 * @property string $citizenship
 * @property string $fc
 * @property string $vk
 * @property string $countries
 * @property string $salary
 * @property string $duration
 * @property string $contract_start_date
 *
 * @property string $exp_country_city
 * @property string $exp_place
 * @property string $exp_period
 */
class Artist extends \yii\db\ActiveRecord
{
    public $birth;
    public $height_weight;
    public $bust_waist_hips;
    public $country_city;
    public $citizenship;
    public $fc;
    public $vk;
    public $genres;
    public $countries;
    public $salary;
    public $duration;
    public $contract_start_date;

    public $exp_country_city;
    public $exp_place;
    public $exp_period;

    public $images;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['birth', 'height_weight', 'bust_waist_hips', 'country_city', 'citizenship', 'fc', 'vk',
                'genres',
                'images',
                'countries', 'salary', 'duration', 'contract_start_date',
                'exp_country_city', 'exp_place', 'exp_period',
             ], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
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

    public function afterSave($insert, $changedAttributes)
    {
        $genres = $this->genres;
        if (!empty($genres)) {
            foreach ($genres as $item) {
                $genre = new ArtistGenre();
                $genre->artist_id = $this->id;
                $genre->genre_id = $item;
                $genre->save();
            }
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtistGenres()
    {
        return $this->hasMany(ArtistGenre::className(), ['artist_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id' => 'genre_id'])->viaTable('artist_genre', ['artist_id' => 'id']);
    }
}
