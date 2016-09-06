<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Lang;
use common\models\Genre;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Заголовок') ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 10],
        'preset' => 'basic',
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['/article/image-upload']),
            'language' => 'ru',
        ]
    ]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true])->label('Ссылка на видео youtube') ?>

    <?= $form->field($model, 'lang')->dropDownList(ArrayHelper::map(Lang::find()->all(), 'url', 'name'), ['size' => 2, 'value' => 'ru'])->label('Язык') ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true])->label('Автор') ?>

    <?= $form->field($model, 'show')->checkbox([
        'label' => 'Публиковать на сайте',
    ])?>

    <?= $form->field($model, 'genresform')->listBox(Genre::getAllArr(),['multiple' => 'multiple', 'size' => 10])
        ->label(\Yii::t('form_t', 'Genre (to select multiple values, press ctrl)')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
