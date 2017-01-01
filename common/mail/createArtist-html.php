<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */

?>
<div class="create-artist">
    <p>Менеджер - <?= Html::encode($model->manager) ?></p>
    <p>Имя - <?= Html::encode($model->first_name) ?></p>
    <p>Фамилия - <?= Html::encode($model->last_name) ?></p>
    <p>Email - <?= Html::encode($model->email) ?></p>
    <p>Телефон - <?= Html::encode($model->phone) ?></p>
    <a href="<?= $model->urlZip; ?>">Скачать файлы артиста</a>
</div>
