<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Genre;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artist-form">

    <?php $form = ActiveForm::begin(); ?>
    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Personal Details'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'First Name'))  ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Last Name'))?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Phone Number')) ?>
        </div>
        <!--------------------------------END MODEL-------------------------------------->

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'birth')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Date of Birth')) ?>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'height_weight')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Height/Weight')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'bust_waist_hips')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Bust/waist/hips')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'country_city')->textInput(['maxlength' => true])
                ->label(\Yii::t('form_t', 'Country/city of residence')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'citizenship')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'Citizenship')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'fc')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'Facebook Link')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'vk')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'VK Link')) ?>
        </div>

        <!--    todo genre-->
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <?= $form->field($model, 'genres')->listBox(Genre::getAllArr(),['multiple' => 'multiple'])
                ->label(\Yii::t('form_t', 'Genre (to select multiple values, press ctrl)')) ?>
        </div>
    </div>




    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Wishes'); ?></h2>
    <div class="row">
        <div class="col-xs-12">
            <?= $form->field($model, 'countries')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'USA, India, China (Shanghai), the United Arab Emirates (Dubai), Mexico')])
                ->label(\Yii::t('form_t', 'Countries')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'salary')->textInput(['maxlength' => true, 'placeholder' => '1500$ – 1700$'])
                ->label(\Yii::t('form_t', 'Salary')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'duration')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', '4-8 months')])
                ->label(\Yii::t('form_t', 'Duration')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => '01.01.'. (date(Y) + 1) ])
                ->label(\Yii::t('form_t', 'Contract Start Date')) ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Documentation'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'Yes/No') ])
                ->label(\Yii::t('form_t', 'Availability of passport')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => '01.01.'. (date(Y) + 9) ])
                ->label(\Yii::t('form_t', 'Validity of passport')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'Yes/No. US - working, China - Business') ])
                ->label(\Yii::t('form_t', 'The presence of open visas')) ?>
        </div>
    </div>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Experience'); ?></h2>
    <section class="form__experience">

    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'exp_country_city')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'US/New York') ])
                ->label(\Yii::t('form_t', 'Country/city')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'exp_place')->textInput(['maxlength' => true, 'placeholder' => 'Affinia, Manhattan, Bellagio Hotel and Casino' ])
                ->label(\Yii::t('form_t', 'Name of place')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'exp_period')->textInput(['maxlength' => true, 'placeholder' => '05.2015 – 05.2016' ])
                ->label(\Yii::t('form_t', 'Work period')) ?>
        </div>
    </div>
    </section>
    <button id="add-exp" class="btn btn_add-exp" type="button">+</button>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Education'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
                ->label(\Yii::t('form_t', 'University')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
                ->label(\Yii::t('form_t', 'Specialty')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
                ->label(\Yii::t('form_t', 'Languages')) ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
                ->label(\Yii::t('form_t', 'Achievements')) ?>
        </div>
    </div>




    <div class="form-group tac">
        <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
