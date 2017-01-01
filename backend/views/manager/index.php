<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ManagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Менеджеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать менеджера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_en',
            'name_ru',
            [
                'attribute'=>'status',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'status',
                    [
                        NULL => 'Все',
                        User::STATUS_ACTIVE => 'Активный',
                        User::STATUS_DELETED => 'Архивный'
                    ],
                    ['class'=>'form-control']
                ),
                'value' => function ($data) {
                    return $data->status == 1 ? 'Активный' : 'Архивный';
                }
            ],

//            'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>