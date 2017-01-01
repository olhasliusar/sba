<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Manager */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Менеджеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a($model->status == 1 ? 'Удалить' : 'Восстановить',
            [$model->status == 1 ? 'delete' : 'reestablish', 'id' => $model->id],
            [
                'class' => 'btn btn-danger',
                'data' => [
                    'method' => 'post',
                ],
            ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_en',
            'name_ru',
            [
                'attribute' => 'status',
                'value' => $model->status == 1 ? 'Активный' : 'Архивный'
            ],
//            [
//                'attribute' => 'created_at',
//                'value' => date('Y-m-d H:i:s', $model->created_at)
//            ],
//            [
//                'attribute' => 'updated_at',
//                'value' => date('Y-m-d H:i:s', $model->created_at)
//            ],
        ],
    ]) ?>

</div>