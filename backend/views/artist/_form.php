<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Genre;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genres')
        ->listBox(Genre::getAllArr(), ['multiple' => 'multiple', 'size' => '8', 'required' => 'required',])
        ->label(\Yii::t('form_t', 'Genre (not more than 4 genres, to select multiple genres, press Ctrl)') . '*', ['class' => 'input__listbox']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
