<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\models\Genre;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $employer common\models\Employer */
/* @var $form yii\widgets\ActiveForm */
$inputTemplate = '<span class="input input--nao">{input}{label}<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>';
?>

<div class="company-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
<!--    <div class="col-xs-12">-->
<!--        <div class="form-group field-company-name">-->
<!--            <span class="input input--nao"><input type="text" id="company-name" class="input__field input__field--nao" name="Company[name]" autocomplete="off" required="required"><label class="input__label input__label--nao" for="company-name"><span class="input__label-content input__label-content--nao">Название компании или имя агента*</span></label><svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path></svg></span>-->
<!--        </div>            -->
<!--    </div>-->
    <p class="custom-checkbox tac">
        <input type="checkbox" id="checkbox" class="checkbox-company"/>
        <label for="checkbox"><?= \Yii::t('form_t', 'I have collaborated with the company SBA already'); ?></label>
    </p>

    <section class="company-form-create_one">
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
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'First Name').', '.\Yii::t('form_t', 'Last Name').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <?=  $form->field($employer, 'last_name', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-first_name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Name of company').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <?=  $form->field($employer, 'email', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-email', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">Email*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <?=  $form->field($model, 'address', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-address', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Head office address').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
<!--            <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--                --><?//=  $form->field($employer, 'phone', ['template' => $inputTemplate ])
//                    ->textInput(['id' => 'employer-phone', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Phone Number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--            </div>-->
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <?=  $form->field($employer, 'fc', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-fc', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Facebook/VK Link').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <?=  $form->field($employer, 'vk', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-vk', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Web-site Link').'</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
<!--            <div class="col-lg-6 col-sm-6 col-xs-12">-->
<!--                --><?//= $form->field($model, 'address', ['template' => $inputTemplate])
//                    ->textInput(['id' => 'company-address', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                    ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Physical address') . '*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--            </div>-->
            <div class="col-xs-12">
                <?=  $form->field($employer, 'wechat', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'employer-wechat', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                    ->label('<span class="input__label-content input__label-content--nao">WeChat/Viber/WhatsApp/Telegram</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
        </div>

    </section>

<!--    <h2 class="fill-in-form__title">--><?//= \Yii::t('form_t', 'Information about company'); ?><!--</h2>-->
<!--    <div class="row">-->
<!--        <div class="col-xs-12">-->
<!--            --><?//= $form->field($model, 'name', ['template' => $inputTemplate])
//                ->textInput(['id' => 'company-name', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Name of company or agent name') . '*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
<!--        <div class="col-xs-12 company-form-create__input-hidden">-->
<!--            --><?//= $form->field($model, 'address', ['template' => $inputTemplate])
//                ->textInput(['id' => 'company-address', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                ->label('<span class="input__label-content input__label-content--nao">' . \Yii::t('form_t', 'Address') . '*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
<!--    </div>-->

    <div class="row">
        <div class="col-xs-12">
            <p class="form__field-title">
                <?= \Yii::t('form_t', 'Please add documents and/or licenses that employer or agent has.'); ?>
            </p>
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
                    'browseLabel' => \Yii::t('general', 'Add'),
                ]
            ])->label(false) ; ?>
        </div>
    </div>
    
    <section class="company-form-create_two">

        <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Contacts of performers who have already worked'); ?></h2>

        <div class="row">
            <div class="col-xs-12">
                <?=  $form->field($model, 'worker1', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'company-worker1', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-xs-12">
                <?=  $form->field($model, 'worker2', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'company-worker2', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
            <div class="col-xs-12">
                <?=  $form->field($model, 'worker3', ['template' => $inputTemplate ])
                    ->textInput(['id' => 'company-worker3', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                    ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Link/Phone number').'*</span>', ['class' => 'input__label input__label--nao']); ?>
            </div>
        </div>

    </section>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'Information about vocation'); ?></h2>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'country_city', ['template' => $inputTemplate ])
                ->textInput(['id' => 'country-city', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country/city').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'schedule', ['template' => $inputTemplate ])
                ->textInput(['id' => 'schedule', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Schedule').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-xs-12">
            <?= $form->field($model, 'genres')
                ->listBox(Genre::getAllArr(),['multiple' => 'multiple', 'size' => '8', 'required' => 'required'])
                ->label(\Yii::t('form_t', 'Performer\'s Genre (to select multiple genres, press Ctrl)').'*', ['class' => 'input__listbox']) ?>
        </div>

        <div class="col-xs-12">
            <?=  $form->field($model, 'skills', ['template' => $inputTemplate ])
                ->textInput(['id' => 'skills', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Performer\'s skills').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-xs-12">
            <?=  $form->field($model, 'salary', ['template' => $inputTemplate ])
                ->textInput(['id' => 'salary', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'The form and amount of payment for the artist').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'residence', ['template' => $inputTemplate ])
                ->textInput(['id' => 'residence', 'placeholder' => \Yii::t('form_t', 'Yes/No'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Residence').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'food', ['template' => $inputTemplate ])
                ->textInput(['id' => 'food', 'placeholder' => \Yii::t('form_t', 'Yes/No') .', '. \Yii::t('form_t', 'how many times'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Food').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'days', ['template' => $inputTemplate ])
                ->textInput(['id' => 'days', 'placeholder' => \Yii::t('form_t', 'How many times in month'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Days off').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'tickets', ['template' => $inputTemplate ])
                ->textInput(['id' => 'tickets', 'placeholder' => \Yii::t('form_t', 'In one/both sides'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Plane tickets').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'visas', ['template' => $inputTemplate ])
                ->textInput(['id' => 'visas', 'placeholder' => \Yii::t('form_t', 'Kind of Visa'), 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Visas').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'leaving', ['template' => $inputTemplate ])
                ->textInput(['id' => 'leaving', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Prospective days of leaving').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'consummation', ['template' => $inputTemplate ])
                ->textInput(['id' => 'consummation', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Schedule of work').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>

        <div class="col-xs-12">
            <p class="form__field-title">
                <?= \Yii::t('form_t', 'Photos from the places of work and residence'); ?>
            </p>
            <?= $form->field($model, 'photo[]')->widget(FileInput::classname(''), [
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
                    'browseLabel' => \Yii::t('form_t', 'Add photo'),
                ]
            ])->label(false); ?>
        </div>
    </div>

    <h2 class="fill-in-form__title"><?= \Yii::t('form_t', 'The requirements for candidates'); ?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'amount', ['template' => $inputTemplate ])
                ->textInput(['id' => 'amount', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Number of artists').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'sex_age', ['template' => $inputTemplate ])
                ->textInput(['id' => 'sex_age', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Sex, age').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'height_weight', ['template' => $inputTemplate ])
                ->textInput(['id' => 'height_weight', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Height, weight').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'education', ['template' => $inputTemplate ])
                ->textInput(['id' => 'education', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Education').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'citizenship', ['template' => $inputTemplate ])
                ->textInput(['id' => 'citizenship', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Country of residence, citizenship').'</span>', ['class' => 'input__label input__label--nao label_required']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'hair', ['template' => $inputTemplate ])
                ->textInput(['id' => 'hair', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Color and length of hair').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--            --><?//=  $form->field($model, 'marital_status', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'marital_status', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
//                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Marital status').'</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'language', ['template' => $inputTemplate ])
                ->textInput(['id' => 'language', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Foreign language skills').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'costume', ['template' => $inputTemplate ])
                ->textInput(['id' => 'costume', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Costume is required').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <?=  $form->field($model, 'experience', ['template' => $inputTemplate ])
                ->textInput(['id' => 'experience', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Experience').'*</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
<!--        <div class="col-xs-12">-->
<!--            --><?//=  $form->field($model, 'qualities', ['template' => $inputTemplate ])
//                ->textInput(['id' => 'qualities', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off', 'required' => 'required'])
//                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Professionally important qualities').'*</span>', ['class' => 'input__label input__label--nao']); ?>
<!--        </div>-->
        <div class="col-xs-12">
            <?=  $form->field($model, 'other', ['template' => $inputTemplate ])
                ->textInput(['id' => 'consummation', 'class' => 'input__field input__field--nao', 'autocomplete' => 'off'])
                ->label('<span class="input__label-content input__label-content--nao">'.\Yii::t('form_t', 'Other requirements').'</span>', ['class' => 'input__label input__label--nao']); ?>
        </div>
    </div>


    <div class="form-group tac">
        <?= Html::submitButton(\Yii::t('general', 'Send'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
