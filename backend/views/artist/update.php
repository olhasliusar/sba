<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */

$this->title = 'Изменить Артиста: ' . $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Артисты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->first_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="artist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
