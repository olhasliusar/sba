<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MyTablet */

$this->title = 'Update My Tablet: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'My Tablets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-tablet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
