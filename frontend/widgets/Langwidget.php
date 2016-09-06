<?php
/**
 * Created by PhpStorm.
 * User: Ksusha
 * Date: 03.04.2015
 * Time: 9:41
 */

namespace frontend\widgets;

use common\models\Lang;

class Langwidget extends \yii\bootstrap\Widget
{

    public function init()
    {
    }

    public function run()
    {
        return $this->render('langwidget/view', [
            'current' => \common\models\Lang::getCurrent(),
//            'langs' => \common\models\Lang::find()->where('id != :current_id', [':current_id' => \common\models\Lang::getCurrent()->id])->all(),
            'langs' => \common\models\Lang::find()->all(),
        ]);
    }
}