<?php
use yii\helpers\Url;

/* @var $models common\models\Article */
foreach ($models as $model) {?>

<div class="row">
    <div class="col-xs-5">
        <a href="<?= Url::to(['/article', 'id' => $model->id]) ?>" class="sidebar__img">
            <img src="<?= $model->mainImage->url ?>" alt="<?= $model->name ?>">
        </a>
    </div>
    <div class="col-xs-7">
        <h3 class="sidebar__article-title">
            <a href="<?= Url::to(['/article', 'id' => $model->id]) ?>">
                <?= $model->shortName ?>
            </a>
        </h3>
    </div>
</div>

<hr>
    
<?php } ?>
