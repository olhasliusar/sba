<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a($model->status == 1 ? 'Удалить' : 'Восстановить',
            [$model->status == 1 ? 'delete' : 'reestablish', 'id' => $model->id],
            [
                'class' => 'btn btn-danger',
                'data' => [
    //                'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
            ],
        ]) ?>

        <?php  ?>
        <?=
        $model->broadcast == 0 ?
            Html::a('Добавить в рассылку', ['create-broadcast', 'id' => $model->id], ['class' => 'btn btn-success'])
            :
            Html::a('Добавлено в рассылку', ['create-broadcast', 'id' => $model->id], ['class' => 'btn btn-success disabled'])
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute' => 'genres',
                'value' => $model->getGenresList() ? implode(', ', $model->getGenresList()) : ''
            ],
            [
                'attribute' => 'text',
                'value' => $model->text,
                'format' => 'raw',
            ],
            'video',
            'lang',
            'author',
            [
                'attribute' => 'show',
                'value' => $model->show == 1 ? 'Опубликовано на сайте' : 'Не опубликовано на сайте'
            ],
            [
                'attribute' => 'status',
                'value' => $model->status == 1 ? 'Активная' : 'Архивная (удалена)'
            ],
            [
                'attribute' => 'created_by',
                'value' => date('Y-m-d H:i:s', $model->created_at) .', '. $model->userCreate->username
            ],
            [
                'attribute' => 'updated_by',
                'value' => date('Y-m-d H:i:s', $model->updated_at) .', '. $model->userUpdate->username
            ],
        ],
    ]) ?>

    <div class="row">
    <?php if($images = $model->allImages){
        foreach ($images as $image){
            echo '<div class="col-md-3 col-sm-6 col-xs-12">';
            echo '<img src="'. $image->url .'" class="full-width">';
            echo '</div>';
        }
    }?>
    </div>
</div>
