<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $employer common\models\Employer */

$this->title = 'SBA | '. \Yii::t('general', 'Create Company');

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/form-company.js');
?>

<div class="company-create form_big">
    <div class="container">
        <section class="company-create__form">

            <?= $this->render('_form', [
                'model' => $model,
                'employer' => $employer,
            ]) ?>

        </section>
    </div>
</div>


