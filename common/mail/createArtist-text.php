<?php

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $manager common\models\Manager */

?>
Менеджер - <?= $manager->name_ru ?>
Имя - <?= $model->first_name ?>
Фамилия - <?= $model->last_name ?>
Email - <?= $model->email ?>
Телефон - <?= $model->phone ?>
Ссылка на скачивание файлов артиста - <?= $model->urlZip ?>