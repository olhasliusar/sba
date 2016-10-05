<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Genre;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $form yii\widgets\ActiveForm */
$inputTemplate = '<span class="input input--nao">{input}{label}<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>{error}';
?>

<div class="artist-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    
    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Personal Details'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'first_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'first_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'First Name').'</span>', ['class' => 'input__label input__label--nao']); ?>

            <!--            --><?//= $form->field($model, 'first_name')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'First Name'))  ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'last_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'last_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Last Name').'</span>', ['class' => 'input__label input__label--nao']); ?>

            <!--            --><?//= $form->field($model, 'last_name')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Last Name'))?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'email', ['template' => $inputTemplate ])
                ->textInput(['type' => 'email', 'id' => 'email', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">Email</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'phone', ['template' => $inputTemplate ])
                ->textInput(['id' => 'phone', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Phone Number').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'phone')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Phone Number')) ?>
        </div>
        <!--------------------------------END MODEL-------------------------------------->

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'birth', ['template' => $inputTemplate ])
                ->textInput(['id' => 'birth', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Date of Birth').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'birth')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Date of Birth')) ?>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'height_weight', ['template' => $inputTemplate ])
                ->textInput(['id' => 'height_weight', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Height/Weight').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'height_weight')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Height/Weight')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'bust_waist_hips', ['template' => $inputTemplate ])
                ->textInput(['id' => 'bust_waist_hips', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Bust/waist/hips').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'bust_waist_hips')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Bust/waist/hips')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'country_city', ['template' => $inputTemplate ])
                ->textInput(['id' => 'country_city', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country/city of residence').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'country_city')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Country/city of residence')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'citizenship', ['template' => $inputTemplate ])
                ->textInput(['id' => 'cost_day', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Citizenship').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'citizenship')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'Citizenship')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'fc', ['template' => $inputTemplate ])
                ->textInput(['id' => 'fc', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Facebook Link').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'fc')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'Facebook Link')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'vk', ['template' => $inputTemplate ])
                ->textInput(['id' => 'vk', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'VK Link').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'vk')->textInput(['maxlength' => true])->label(\Yii::t('form_t', 'VK Link')) ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'genres')
                ->listBox(Genre::getAllArr(),['multiple' => 'multiple', 'size' => '8'])
                ->label(\Yii::t('form_t', 'Genre (to select multiple genres, press Ctrl)'), ['class' => 'input__listbox']) ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'images[]')->widget(FileInput::classname(''), [
                'options' =>
                    [
                        'accept' => 'image/*',
                        'multiple' => false,
                    ],
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block btn-success',
                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                    'browseLabel' => 'Add Photo',
                ]
            ])->label(false) ; ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Wishes'); ?></h2>
    <div class="row">
        <div class="col-xs-12">
            <?=  $form->field($model, 'countries', ['template' => $inputTemplate ])
                ->textInput(['id' => 'countries', 'placeholder' => \Yii::t('form_t', 'USA, India, China (Shanghai), the United Arab Emirates (Dubai), Mexico'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Countries').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'countries')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'USA, India, China (Shanghai), the United Arab Emirates (Dubai), Mexico')])
//                ->label(\Yii::t('form_t', 'Countries')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'salary', ['template' => $inputTemplate ])
                ->textInput(['id' => 'salary', 'placeholder' => '1500$ – 1700$', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Salary').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'salary')->textInput(['maxlength' => true, 'placeholder' => '1500$ – 1700$'])
//                ->label(\Yii::t('form_t', 'Salary')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'duration', ['template' => $inputTemplate ])
                ->textInput(['id' => 'duration', 'placeholder' => \Yii::t('form_t', '4-8 months'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Duration').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'duration')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', '4-8 months')])
//                ->label(\Yii::t('form_t', 'Duration')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'contract_start_date', ['template' => $inputTemplate ])
                ->textInput(['id' => 'contract_start_date', 'placeholder' => '01.01.'. (date(Y) + 1), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Contract Start Date').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => '01.01.'. (date(Y) + 1) ])
//                ->label(\Yii::t('form_t', 'Contract Start Date')) ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Documentation'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'contract_start_date', ['template' => $inputTemplate ])
                ->textInput(['id' => 'contract_start_date', 'placeholder' => \Yii::t('form_t', 'Yes/No'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Availability of passport').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'Yes/No') ])
//                ->label(\Yii::t('form_t', 'Availability of passport')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'contract_start_date', ['template' => $inputTemplate ])
                ->textInput(['id' => 'contract_start_date', 'placeholder' => '01.01.'. (date(Y) + 9), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Validity of passport').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => '01.01.'. (date(Y) + 9) ])
//                ->label(\Yii::t('form_t', 'Validity of passport')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'contract_start_date', ['template' => $inputTemplate ])
                ->textInput(['id' => 'contract_start_date', 'placeholder' => \Yii::t('form_t', 'Yes/No. US - working, China - Business'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'The presence of open visas').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'Yes/No. US - working, China - Business') ])
//                ->label(\Yii::t('form_t', 'The presence of open visas')) ?>
        </div>
    </div>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Experience'); ?></h2>
    <section class="form__experience">

    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_country_city', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_country_city', 'placeholder' => \Yii::t('form_t', 'US/New York'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country/city').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'exp_country_city')->textInput(['maxlength' => true, 'placeholder' => \Yii::t('form_t', 'US/New York') ])
//                ->label(\Yii::t('form_t', 'Country/city')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_place', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'placeholder' => 'Affinia, Manhattan', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Name of place').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'exp_place')->textInput(['maxlength' => true, 'placeholder' => 'Affinia, Manhattan, Bellagio Hotel and Casino' ])
//                ->label(\Yii::t('form_t', 'Name of place')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_period', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_period', 'placeholder' => '05.2015 – 05.2016', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Work period').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'exp_period')->textInput(['maxlength' => true, 'placeholder' => '05.2015 – 05.2016' ])
//                ->label(\Yii::t('form_t', 'Work period')) ?>
        </div>
    </div>
    </section>
    <button id="add-exp" class="btn btn_add-exp" type="button">+</button>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Education'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_place', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'University').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
//                ->label(\Yii::t('form_t', 'University')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_place', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Specialty').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
//                ->label(\Yii::t('form_t', 'Specialty')) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_place', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'placeholder' => 'Affinia, Manhattan', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Languages').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
//                ->label(\Yii::t('form_t', 'Languages')) ?>
        </div>
        <div class="col-xs-12">
            <?=  $form->field($model, 'exp_place', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'placeholder' => 'Affinia, Manhattan, Bellagio Hotel and Casino', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Achievements').'</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'contract_start_date')->textInput(['maxlength' => true, ])
//                ->label(\Yii::t('form_t', 'Achievements')) ?>
        </div>
    </div>




    <div class="form-group tac">
        <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
