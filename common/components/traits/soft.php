<?php

namespace common\components\traits;


trait soft
{
    # class name

    public static function lastNameClass()
    {
        $array = explode('\\', static::className());
        return array_pop($array);
    }

    # load

    public function load($data, $formName = null)
    {
        $className = $this::lastNameClass();

        if (array_key_exists($className, $data)) {
            return parent::load($data, $formName);
        }

        return parent::load([$className => $data], $formName);
    }

}