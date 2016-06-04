<?php
namespace common\components\ActiveRecord;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

use common\models\User;

/**
 * Class ExtendedActiveRecord
 * @package common\components\ActiveRecord
 */
class ExtendedActiveRecord extends ActiveRecord
{

    const DELETED_ACTIVE = 0;
    const DELETED_IN_ACTIVE = 1;

    const FIELD_STATUS = 'deleted';

    /**
     * @param bool $isActive
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll($isActive = true)
    {
        if ($isActive) {
            return self::find()->where(['deleted' => self::DELETED_ACTIVE])->all();
        }
        return self::find()->all();
    }

    /**
     * @param integer $id
     * @param bool $isActive
     * @return array|null|ActiveRecord
     */
    public static function getById($id, $isActive = true)
    {
        if ($isActive) {
            return self::find()->where(['id' => $id, self::FIELD_STATUS => self::DELETED_ACTIVE])->one();
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
            $this->$field = self::DELETED_IN_ACTIVE;
            $this->save(false);
            return $this;
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
            $this->$field = self::DELETED_ACTIVE;
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
                case self::DELETED_ACTIVE:
                    $label = 'aктивный';
                    break;
                case self::DELETED_IN_ACTIVE:
                    $label = 'aрхивный';
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
            self::DELETED_ACTIVE => 'aктивные',
            self::DELETED_IN_ACTIVE => 'aрхивные'
        ];
    }


}

