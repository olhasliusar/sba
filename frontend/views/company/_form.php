<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\models\Employer;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $employer common\models\Employer */
/* @var $form yii\widgets\ActiveForm */
$inputTemplate = '<span class="input input--nao">{input}{label}<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>{error}';
?>

<div class="company-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Information about an chief or manager'); ?></h2>
    <div class="row">

<!--        <div class="col-xs-12">-->
<!--            --><?//= $form->field($employer, 'role')->radioList([
//                Employer::ROLE_CHIEF => 'Глава компании',
//                Employer::ROLE_MANAGER => 'Менеджер',
//            ])->label(false) ?>
<!--        </div>-->

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'first_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-first_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'First Name').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'last_name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-first_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Last Name').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'phone', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-phone', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Phone Number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-12 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'email', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-email', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">Email*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'fc', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-fc', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Facebook Link').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'vk', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-vk', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'VK Link').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($employer, 'wechat', ['template' => $inputTemplate ])
                ->textInput(['id' => 'employer-wechat', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">WeChat/WhatsApp/Viber</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
    </div>


    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Information about company'); ?></h2>

    <div class="row">
        <div class="col-xs-12">
            <?=  $form->field($model, 'name', ['template' => $inputTemplate ])
                ->textInput(['id' => 'company-name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Name of company or agent name').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-xs-12">
            <?=  $form->field($model, 'address', ['template' => $inputTemplate ])
                ->textInput(['id' => 'company-address', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Address').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'licenses[]')->widget(FileInput::classname(''), [
                'options' =>
                    [
//                        'accept' => 'image/*',
                        'multiple' => true,
                    ],
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block btn-success',
                    'browseLabel' => \Yii::t('form_t', 'Please add documents or licenses that employer or agent has.'),
                ]
            ])->label(false) ; ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Contacts of performers who have already worked'); ?></h2>

    <div class="col-lg-4 col-sm-6 col-xs-12">
        <?=  $form->field($model, 'worker1', ['template' => $inputTemplate ])
            ->textInput(['id' => 'company-worker1', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
            ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <?=  $form->field($model, 'worker2', ['template' => $inputTemplate ])
            ->textInput(['id' => 'company-worker2', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
            ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <?=  $form->field($model, 'worker3', ['template' => $inputTemplate ])
            ->textInput(['id' => 'company-worker3', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
            ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
    </div>


    <div class="form-group tac">
        <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
