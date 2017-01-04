<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $manager common\models\Manager */

?>
<div class="create-artist">
    <p>Менеджер - <?= Html::encode($manager->name_ru) ?></p>
    <p>Имя - <?= Html::encode($model->first_name) ?></p>
    <p>Фамилия - <?= Html::encode($model->last_name) ?></p>
    <p>Email - <?= Html::encode($model->email) ?></p>
    <p>Телефон - <?= Html::encode($model->phone) ?></p>
    <a href="<?= $model->urlZip; ?>">Скачать файлы артиста</a>
</div>
