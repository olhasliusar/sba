<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MyTablet */

$this->title = 'Create My Tablet';
$this->params['breadcrumbs'][] = ['label' => 'My Tablets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-tablet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
