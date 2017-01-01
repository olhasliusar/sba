<?php

namespace common\components\ActiveRecord;

use common\components\traits\soft;
use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

use common\models\User;

/**
 * Class ExtendedActiveRecord
 * @package common\components\ActiveRecord
 */
class ExtendedActiveRecord extends ActiveRecord
{
    use soft;
    
    const STATUS_ACTIVE = 0;
    const STATUS_IN_ACTIVE = 1;

    const FIELD_STATUS = 'status';

    /**
     * @param bool $isActive
     * @return ActiveQuery the newly created [[ActiveQuery]] instance.
     */
    public static function getActive($isActive = true)
    {
        $field = self::FIELD_STATUS;

        if ($isActive) {
            return self::find()->where([$field => self::STATUS_ACTIVE]);
        }

        return self::find();
    }

    /**
     * @param integer $id
     * @param bool $isActive
     * @return array|null|ActiveRecord
     */
    public static function getById($id, $isActive = true)
    {
        if ($isActive) {
            return self::find()->where(['id' => $id, self::FIELD_STATUS => self::STATUS_ACTIVE])->one();
        }
        return self::find()->where(['id' => $id])->one();
    }


    /**
     * @return $this|false|int
     * @throws \Exception
     */
    public function delete()
    {
        $field = self::FIELD_STATUS;

        if ($this->hasAttribute($field)) {
            $this->$field = self::STATUS_IN_ACTIVE;
            return $this->save(false);
        }
        return parent::delete();
    }

    /**
     * @return $this
     */
    public function restore()
    {
        $field = self::FIELD_STATUS;

        if ($this->hasAttribute($field)) {
            $this->$field = self::STATUS_ACTIVE;
            $this->save(false);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDeletedLabel()
    {
        $field = self::FIELD_STATUS;
        $label = '';

        if ($this->hasAttribute($field)) {
            switch ($this->$field) {
                case self::STATUS_ACTIVE:
                    $label = 'active';
                    break;
                case self::STATUS_IN_ACTIVE:
                    $label = 'not active';
                    break;
            }
        }
        return $label;
    }

    /**
     * @return array
     */
    public static function getDeletedArr()
    {
        return [
            self::STATUS_ACTIVE => 'aктивные',
            self::STATUS_IN_ACTIVE => 'aрхивные'
        ];
    }

    /**
     * @return mixed
     */
    public function errors()
    {
        return $this->getErrors() ? array_shift($this->getErrors())[0] : 'Unknown error!';
    }


}

