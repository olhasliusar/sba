<?php

namespace common\components\traits;

/**
 * Class softDeletes
 * @package common\components\traits
 */
trait softDeletes
{
    public function delete($softDelete = true)
    {
        $field = $this->fieldStatus();
        if ($softDelete && $this->hasAttribute($field)) {
            $this->$field = $this->inActiveStatus();
            return $this->save(false);
        }
        return parent::delete();
    }

    public function restore()
    {
        $field = $this->fieldStatus();
        if ($this->hasAttribute($field)) {
            $this->$field = $this->activeStatus();
            $this->save(false);
        }
        return $this;
    }


    public function getStatusLabel()
    {
        $field = $this->fieldStatus();
        $array = $this->getArrayStatus();

        return $this->hasAttribute($field) ? $array[$this->$field] : '';
    }

    public function getArrayStatus()
    {
        return [
            $this->activeStatus() => $this->activeStatusLabel(),
            $this->inActiveStatus() => $this->inActiveStatusLabel(),
        ];
    }

    # getters

    public function fieldStatus()
    {
        return defined('static::FIELD_STATUS') ? static::FIELD_STATUS : 'status';
    }

    public function activeStatus()
    {
        return defined('static::STATUS_ACTIVE') ? static::STATUS_ACTIVE : 1;
    }

    public function inActiveStatus()
    {
        return defined('static::STATUS_IN_ACTIVE') ? static::STATUS_IN_ACTIVE : 0;
    }

    public function activeStatusLabel()
    {
        return defined('static::STATUS_ACTIVE_LABEL') ? static::STATUS_ACTIVE_LABEL : 'active';
    }

    public function inActiveStatusLabel()
    {
        return defined('static::STATUS_IN_ACTIVE_LABEL') ? static::STATUS_IN_ACTIVE_LABEL : 'archive';
    }

}