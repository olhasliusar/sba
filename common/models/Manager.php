<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "manager".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_ru
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name_en', 'name_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_en' => 'Имя En',
            'name_ru' => 'Имя Ru',
            'status' => 'Статус',
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

    public static function getManager(){
        return Manager::find()->where(['status' => User::STATUS_ACTIVE])->all();
    }

    public static function getAllArr()
    {
        return ArrayHelper::map(Manager::getManager(), 'id', 'name_' . Lang::getCurrent()->url);
//        return ArrayHelper::map(Manager::getManager(), 'name_' . Lang::getCurrent()->url, 'name_' . Lang::getCurrent()->url);
    }

    public function setStatus($status){
        $this->status = $status;
        return $this->save();
    }

    
    public static function findById($id)
    {
        return static::findOne([
            'id' => $id,
            'status' => User::STATUS_ACTIVE,
        ]);
    }
}
