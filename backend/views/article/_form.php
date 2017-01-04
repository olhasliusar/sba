<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Lang;
use common\models\Genre;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use kartik\file\FileInput;
use common\models\Article;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Заголовок') ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 10],
        'preset' => 'basic',
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['/article/image-upload']),
            'language' => 'ru',
        ]
    ]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true])->label('Мета-тег keywords') ?>
    
    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true])->label('Мета-тег description') ?>
    
    <?= $form->field($model, 'video')->textInput(['maxlength' => true])->label('Ссылка на видео youtube') ?>

    <?= $form->field($model, 'lang')->dropDownList(ArrayHelper::map(Lang::find()->all(), 'url', 'name'), ['size' => 2, 'value' => 'ru'])->label('Язык') ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true])->label('Автор') ?>

    <?= $form->field($model, 'role')->radioList([
        Article::ROLE_JOB => 'Вакансия',
        Article::ROLE_ARTICLE => 'Статья',
    ])?>

    <?= $form->field($model, 'show')->checkbox(['label' => 'Публиковать на сайте'])?>

    <section class="genres__box">
        <h3 class="tac">Жанри</h3>
        <div class="row">
            <?php
            $i = 0;
            foreach(Genre::getGenres() as $genre){ ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <label class="genres__label">
                        <input type="checkbox" class="genres__checkbox" value="<?= $genre->id ?>"
                            <?= $model->checkGenre($genre->id)?>>
                        <?= \Yii::t('genre_t', $genre->name); ?>
                    </label>
                </div>
                <?
                $i++;
                echo ($i % 4 == 0) ? '</div><div class="row">' : '';
            } ?>
        </div>
    </section>


<!--    --><?//= $form->field($model, 'genresform')->listBox(Genre::getAllArr(),['multiple' => 'multiple', 'size' => 10])
//        ->label(\Yii::t('form_t', 'Genre (to select multiple values, press ctrl)')) ?>
    <?= $form->field($model, 'genresform')->hiddenInput(['class' => 'genresform__input', ])->label(false) ?>
    <?= $form->field($model, 'imageActive')->hiddenInput(['class' => 'image-show__input', ])->label(false) ?>
    <?= $form->field($model, 'removeFiles')->hiddenInput(['class' => 'image-remove__input', ])->label(false) ?>

    <?= $form->field($model, 'images[]')->widget(FileInput::classname(''), [
        'options' =>
            [
                'accept' => 'image/*',
                'multiple' => true,
            ],
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block btn-success',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i>',
            'browseLabel' => 'Добавить фото',
        ]
    ])->label(false); ?>    

    <div class="row">
    <?php if($images = $model->allImages){
        foreach ($images as $image){ ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="image-update__wrapper">
                <button type="button" data-image-id="<?= $image->id ?>"
                        class="image-show btn image-update__btn image-update__btn_show 
                        image-show_<?= $image->show ?>"></button>
                <button type="button" data-image-id="<?= $image->id ?>"
                        class="image-delete btn image-update__btn image-update__btn_del"></button>
                <img src="<?= $image->url ?>">
            </div>
        </div>
    <?php }
    } ?>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
