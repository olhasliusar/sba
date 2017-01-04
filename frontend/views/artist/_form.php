<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Genre;
use common\models\Manager;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/form-select.js');
$inputTemplate = '<span class="input input--nao">{input}{label}<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>';
?>

<div class="artist-form">

    <div class="row tac">
        <div class="col-xs-12">
            <nav class="cl-effect-7">
                <a href="<?= Url::to('../site/contact-head')?>"><?= \Yii::t('form_t', 'You are the head of the team?')?></a>
            </nav>
        </div>
    </div>

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    
    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Personal Details'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?= $form->field($model, 'manager_id')
                ->dropDownList(Manager::getAllArr())->error(false)
                ->label(\Yii::t('form_t', 'Who is your manager?'), ['class' => 'input__listbox input__dropdown']) ?>
        </div>
<!--        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--            --><?//= $form->field($model, 'manager')
//                ->dropDownList(Manager::getAllArr())->error(false)
//                ->label(\Yii::t('form_t', 'Who is your manager?'), ['class' => 'input__listbox input__dropdown']) ?>
<!--        </div>-->

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'first_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'first_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'First Name').'*</span>', ['class' => 'input__label input__label--nao']); ?>

            <!--            --><?//= $form->field($model, 'first_name')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'First Name'))  ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'last_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'last_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Last Name').'*</span>', ['class' => 'input__label input__label--nao']); ?>

            <!--            --><?//= $form->field($model, 'last_name')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Last Name'))?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'email', ['template' => $inputTemplate ])
                ->textInput(['type' => 'email', 'id' => 'email', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">Email*</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'phone', ['template' => $inputTemplate ])
                ->textInput(['id' => 'phone', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Phone Number').'*</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'phone')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Phone Number')) ?>
        </div>
        <!--------------------------------END MODEL-------------------------------------->

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'birth', ['template' => $inputTemplate ])
                ->textInput(['id' => 'birth', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Date of Birth').'*</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'birth')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Date of Birth')) ?>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'height_weight', ['template' => $inputTemplate ])
                ->textInput(['id' => 'height_weight', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Height/Weight').'*</span>', ['class' => 'input__label input__label--nao']); ?>

<!--            --><?//= $form->field($model, 'height_weight')->textInput(['maxlength' => true])
//                ->label(\Yii::t('form_t', 'Height/Weight')) ?>
        </div>
<!--        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--            --><?//=  $form->field($model, 'bust_waist_hips', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'bust_waist_hips', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Bust/waist/hips').'</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'country_city', ['template' => $inputTemplate ])
                ->textInput(['id' => 'country_city', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country/city of residence').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--            --><?//=  $form->field($model, 'citizenship', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'cost_day', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Citizenship').'*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'fc', ['template' => $inputTemplate ])
                ->textInput(['id' => 'fc', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Facebook Link').'/VK*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--            --><?//=  $form->field($model, 'vk', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'vk', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                ->label('<span class="input__label-content input__label-content--nao">Instagram</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
        <div class="col-xs-12">
            <?= $form->field($model, 'genres')
                ->listBox(Genre::getAllArr(),['multiple' => 'multiple', 'size' => '8', 'required' => 'required',])
                ->label(\Yii::t('form_t', 'Genre (not more than 4 genres, to select multiple genres, press Ctrl)').'*', ['class' => 'input__listbox']) ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Wishes for vacancies'); ?></h2>
    <div class="row">
        <div class="col-xs-12">
            <?=  $form->field($model, 'countries', ['template' => $inputTemplate ])
                ->textInput(['id' => 'countries', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Select the desired country for job').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'salary', ['template' => $inputTemplate ])
                ->textInput(['id' => 'salary', 'placeholder' => '500$ – 1500$', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Salary').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'duration', ['template' => $inputTemplate ])
                ->textInput(['id' => 'duration', 'placeholder' => \Yii::t('form_t', '4-8 months'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Duration').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'contract_start_date', ['template' => $inputTemplate ])
                ->textInput(['id' => 'contract_start_date', 'placeholder' => '01.01.'. (date('Y') + 1), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Contract Start Date').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Documentation'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'international_passport', ['template' => $inputTemplate ])
                ->textInput(['id' => 'international_passport', 'placeholder' => \Yii::t('form_t', 'Yes/No'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Availability of passport').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'date_passport', ['template' => $inputTemplate ])
                ->textInput(['id' => 'date_passport', 'placeholder' => '01.01.'. (date('Y') + 9), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Validity of passport').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'visa', ['template' => $inputTemplate ])
                ->textInput(['id' => 'visa', 'placeholder' => \Yii::t('form_t', 'Yes/No. US - working, China - Business'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'The presence of open visas').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-xs-12">-->
<!--            --><?//= $form->field($model, 'passport[]')->widget(FileInput::classname(''), [
//                'options' =>
//                    [
//                        'accept' => 'image/*',
//                        'multiple' => true,
//                    ],
//                'pluginOptions' => [
//                    'showCaption' => false,
//                    'showRemove' => false,
//                    'showUpload' => false,
//                    'browseClass' => 'btn btn-primary btn-block btn-success',
//                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
//                    'browseLabel' => \Yii::t('form_t', 'Scan all completed pages of international passport'),
//                ]
//            ])->label(false); ?>
<!--        </div>-->
    </div>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Experience'); ?></h2>
    <section class="form__experience">

    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_country_city[]', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_country_city', 'placeholder' => \Yii::t('form_t', 'US/New York'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country/city').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_place[]', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_place', 'placeholder' => 'Affinia, Manhattan', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Name of place').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'exp_period[]', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_period', 'placeholder' => '05.2015 – 05.2016', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Work period').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-xs-12">
            <?=  $form->field($model, 'exp_contact[]', ['template' => $inputTemplate ])
                ->textInput(['id' => 'exp_contact', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Contact of employer (for confirmation and advice)').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
    </div>
    </section>
    <button id="add-exp" class="btn btn_add-exp" type="button">+</button>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Education'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'university', ['template' => $inputTemplate ])
                ->textInput(['id' => 'university', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'University').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'specialty', ['template' => $inputTemplate ])
                ->textInput(['id' => 'specialty', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Specialty').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'languages', ['template' => $inputTemplate ])
                ->textInput(['id' => 'languages', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Languages').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-xs-12">-->
<!--            --><?//=  $form->field($model, 'achievements', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'achievements', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Achievements').'</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Promo'); ?></h2>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <?=  $form->field($model, 'video1', ['template' => $inputTemplate ])
                ->textInput(['id' => 'video1', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Video link').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-sm-6 col-xs-12">
            <?=  $form->field($model, 'video2', ['template' => $inputTemplate ])
                ->textInput(['id' => 'video2', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Video link').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-xs-12">
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
                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                    'browseLabel' => \Yii::t('general', 'Add Photo') .' ('. \Yii::t('form_t', 'To add more than 1 photo press CTRL') . ')',
                ]
            ])->label(false); ?>
            <?= $form->field($model, 'document[]')->widget(FileInput::classname(''), [
                'options' =>
                    [
                        'multiple' => true,
                    ],
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block btn-success',
                    'browseLabel' => 'Track List (' . \Yii::t('form_t', 'only for musicians') .')',
                ]
            ])->label(false); ?>
        </div>
    </div>

    <p class="rights">&copy; <?= \Yii::t('form_t', 'By submitting this form, you consent to the use and processing of your data for advertising purposes to provide information to potential employers.') ?></p>

    <div class="form-group tac">
        <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
