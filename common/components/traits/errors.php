<?php

namespace common\components\traits;


trait errors
{
    # error

    public function errors()
    {
        $message = $this->errorRecursive($this->getErrors());

        return \Yii::t('app', $message);
    }

    protected function errorRecursive($error)
    {
        if (is_array($error)) {
            return $this->errorRecursive(array_shift($error));
        }
        return $error;
    }
}