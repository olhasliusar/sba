<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'value' => function ($data) {
                    return strlen($data->name) < 50 ? $data->name : mb_substr(strip_tags($data->name), 0, 50, "UTF-8") . '...';
                }
            ],

            [
                'attribute'=>'status',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'status',
                    [
                        NULL => 'Все',
                        User::STATUS_ACTIVE => 'Активная',
                        User::STATUS_DELETED => 'Архивная'
                    ],
                    ['class'=>'form-control']
                ),
                'value' => function ($data) {
                    return $data->status == 1 ? 'Активная' : 'Архивная';
                }
            ],

            [
                'attribute'=>'lang',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'lang',
                    [
                        NULL => 'Все',
                        'ru' => 'ru',
                        'en' => 'en'
                    ],
                    ['class'=>'form-control']
                ),
                'value' => function ($data) {
                    return $data->lang == 'ru' ? 'ru' : 'en';
                }
            ],


//            'text:ntext',
            'video',
//            'lang',
            // 'author',
            // 'show',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
