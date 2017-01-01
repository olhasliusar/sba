<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Artist */

$this->title = 'SBA | '. \Yii::t('general', 'Fill in the form');
//$this->params['breadcrumbs'][] = ['label' => 'Artists', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="artist-create form_big">
    <div class="container">
        <section class="artist-create__form">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </section>
    </div>
</div>
