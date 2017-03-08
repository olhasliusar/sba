<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'SBA | '. \Yii::t('general', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
$inputTemplate = '<span class="input input--nao">{input}{label}<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>';
?>

<div class="site-contact form_big">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <p class="tac">
                    <?= \Yii::t('general', 'Vadym Drozdovskyi') ?>
                    -
                    <?= \Yii::t('general', 'Head of Company') ?>
                </p>
            </div>

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+3800973818744" target="_blank" class="contacts__link">
                        <h3>WhatsApp / Viber / WeChat / Telegram</h3>
                        <p>+38 097 381 87 44</p>
                    </a>
                </nav>
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:vadosax@sba.world" target="_blank">
                        Email:<br>
                        vadosax@sba.world
                    </a>
                </nav>
            </div>
        </div>

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
        <div class="row">
            <!--            <div class="col-md-6 col-md-offset-3">-->
            <div class="col-md-5 col-md-offset-1 col-xs-12">
                <?= $form->field($model, 'name', ['template' => $inputTemplate])
                    ->textInput(['id' => 'name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Name') . '*</span>',
                        ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-md-5  col-xs-12">
                <?= $form->field($model, 'tel', ['template' => $inputTemplate])
                    ->textInput(['id' => 'tel', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Phone Number') . '*</span>', ['class' => 'input__label input__label--nao']); ?>

                <!--                --><? //= $form->field($model, 'subject', ['template' => $inputTemplate])
                //                    ->textInput(['id' => 'subject', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                //                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Subject') . '*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>

            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <?= $form->field($model, 'email', ['template' => $inputTemplate])
                    ->textInput(['id' => 'email', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                    ->label('<span class="input__label-content input__label-content--nao">Email*</span>', ['class' => 'input__label input__label--nao']); ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 5])->error(false)
                    ->label(\Yii::t('form_t', 'Your message'), ['class' => 'input__listbox']) ?>

                <div class="form-group tac">
                    <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>


<!--<div class="site-contact form_big">-->
<!--    <div class="container">      -->
<!---->
<!--        --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!--        <div class="row">-->
<!--            <!--            <div class="col-md-6 col-md-offset-3">-->-->
<!--            <div class="col-md-10 col-md-offset-1 col-xs-12">-->
<!--                --><? //= $form->field($model, 'name', ['template' => $inputTemplate])
//                    ->textInput(['id' => 'name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Name') . '*</span>',
//                        ['class' => 'input__label input__label--nao']); ?>
<!---->
<!--                --><? //= $form->field($model, 'tel', ['template' => $inputTemplate])
//                    ->textInput(['id' => 'tel', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Phone Number') . ' / WhatsApp / Viber / WeChat / Telegram*</span>', ['class' => 'input__label input__label--nao']); ?>
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-md-10 col-md-offset-1 col-xs-12">-->
<!--                <div class="form-group tac">-->
<!--                    --><? //= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->
