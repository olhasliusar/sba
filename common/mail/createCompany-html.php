<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

?>
<div class="create-company">
    <p>Компания - <?= Html::encode($model->name) ?></p>
    <a href="<?= $model->urlZip; ?>">Скачать файлы</a>
</div>
