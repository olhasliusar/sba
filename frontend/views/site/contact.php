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

<!--        <div class="row">-->
<!--            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">-->
<!--                <nav class="cl-effect-4">-->
<!--                    <a href="tel:+3800950244679" target="_blank" class="contacts__link">-->
<!--                        <h3>WhatsApp / Viber / WeChat / Telegram</h3>-->
<!--                        <p>+38 095 024 46 79</p>-->
<!--                    </a>-->
<!--                </nav>-->
<!--                <nav class="cl-effect-4">-->
<!--                    <a class="contacts__link" href="mailto:daria@sba.world" target="_blank">-->
<!--                        Email:<br>-->
<!--                        daria@sba.world-->
<!--                    </a>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <p class="tac">
                    <?= \Yii::t('general', 'Daria Murzina') ?>
                    -
                    <?= \Yii::t('general', 'Head of External Relations') ?>
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+3800950244679" target="_blank" class="contacts__link">
                        WhatsApp / Viber / WeChat / Telegram<br>
                        +38 095 024 4679
                    </a>
                </nav>
            </div>
            <div class="col-lg-5 col-lg-offset-0 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:daria@sba.world" target="_blank">
                        Email:<br>
                        daria@sba.world
                    </a>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <hr>

                <p class="tac">
                    <?= \Yii::t('general', 'Drozdovsky Vadim') ?>
                    -
                    <?= \Yii::t('general', 'Director of company') ?>
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+380973818744" target="_blank" class="contacts__link">
                        WhatsApp / Viber / WeChat / Telegram<br>
                        +38 097 381 8744
                    </a>
                </nav>
            </div>
            <div class="col-lg-5 col-lg-offset-0 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:vadosax@sba.world" target="_blank">
                        Email:<br>
                        vadosax@sba.world
                    </a>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <hr>

                <p class="tac">
                    <?= \Yii::t('general', 'Belomar Vadim') ?>
                    -
                    <?= \Yii::t('general', 'General manager') ?>
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+380663792984" target="_blank" class="contacts__link">
                        WhatsApp / Viber / WeChat / Telegram<br>
                        +38 066 379 2984
                    </a>
                </nav>
            </div>
            <div class="col-lg-5 col-lg-offset-0 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:vadym.manager@sba.world" target="_blank">
                        Email:<br>
                        vadym.manager@sba.world
                    </a>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <hr>

                <p class="tac">
                    <?= \Yii::t('general', 'Markunas Lily') ?>
                    -
                    <?= \Yii::t('general', 'Head of remote managers') ?>
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+380984497373" target="_blank" class="contacts__link">
                        WhatsApp / Viber / WeChat / Telegram<br>
                        +38 098 449 7373
                    </a>
                </nav>
            </div>
            <div class="col-lg-5 col-lg-offset-0 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:lilya.manager@sba.world" target="_blank">
                        Email:<br>
                        lilya.manager@sba.world
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

<!--                --><?//= $form->field($model, 'subject', ['template' => $inputTemplate])
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

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 contacts__link-column">

                <h2><?= \Yii::t('general', 'Our Address')?></h2>
                <address>
                    <?= \Yii::t('general', 'Kharkiv, Ukraine Defenders Street 7/8, office 13')?>
                </address>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5281.028141805712!2d36.25414683264309!3d49.98616387803132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09056461c7f%3A0x62033e3c164b12f8!2z0LzQsNC50LTQsNC9INCX0LDRhdC40YHQvdC40LrRltCyINCj0LrRgNCw0ZfQvdC4LCA3LzgsIDEzLCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1480866833109" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

</article>
