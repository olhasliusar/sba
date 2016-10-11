<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $employer common\models\Employer */

$this->title = 'SBA | '. \Yii::t('general', 'Create Company');
//$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="company-create">
    <div class="container">
        <section class="company-create__form">

            <?= $this->render('_form', [
                'model' => $model,
                'employer' => $employer,
            ]) ?>

        </section>
    </div>
</div>


