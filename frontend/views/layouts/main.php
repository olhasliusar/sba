<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\Langwidget;
use common\models\Lang;
use common\models\Article;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css?family=Arimo|Merriweather|PT+Sans" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => 'SBA',
        'brandLabel' => '<img class="logo" src="' . Yii::$app->request->BaseUrl . '/frontend/web/img/logo_d.png">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top ',//nav-transparent
        ],
    ]);
    $menuItems = [
        ['label' => 'SBA', 'url' => ['/site/index']],
        ['label' => \Yii::t('general', 'Looking for a job'), 'url' => ['/site/looking-for-a-job']],
        ['label' => \Yii::t('general', 'Looking for artists'), 'url' => ['/site/looking-for-artists']],
        ['label' => \Yii::t('general', 'Fill in the form'), 'url' => ['/artist/create']],
        Langwidget::widget(),
    ];

//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <?php
    $menuItemsFooter = [];
    $menuItemsFooter[] =
        [
            'label' => \Yii::t('general', 'Home'),
            'url' => ['/'],
            'linkOptions' => [
                'class' => 'menu-styling',
            ],
        ];
    $menuItemsFooter[] = [
        'label' => \Yii::t('general', 'Categories'),
        'url' => ['/site/category-list'],
        'linkOptions' => [
            'class' => 'menu-styling',
            'title' => \Yii::t('general', 'Categories'),
        ]
    ];
    $menuItemsFooter[] = [
        'label' => \Yii::t('general', 'Companies'),
        'url' => ['/company/index'],
        'linkOptions' => [
            'class' => 'menu-styling',
            'title' => \Yii::t('general', 'Companies'),
        ]
    ];
    $menuItemsFooter[] = [
        'label' => \Yii::t('general', 'Contact'),
        'url' => ['/site/contact'],
        'linkOptions' => [
            'class' => 'menu-styling',
            'title' => \Yii::t('general', 'Contact'),
        ]
    ];
    ?>

<!--    <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
</div>

<footer class="footer">
    <section class="links section tac">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="links__title"><?= \Yii::t('general', 'Articles')?></h3>
                    <?php echo Nav::widget([
                        'options' => ['class' => 'links__menu cl-effect-4'],
                        'items' => Article::getMenuArticles(),
                        'encodeLabels' => false,
                    ]); ?>
<!--                    <ul class="links__menu nav cl-effect-4"><li><a class="menu-styling" href="/en">Home</a></li>-->
<!--                        <li><a class="menu-styling" href="/en/site/contact" title="Contact">Lorem ipsum dolor sit.</a></li></ul>-->

                </div>
                <div class="col-sm-6 col-xs-12">
                    <h3 class="links__title"><?= \Yii::t('general', 'Other Links')?></h3>
                    <?php echo Nav::widget([
                        'options' => ['class' => 'links__menu cl-effect-4'],
                        'items' => $menuItemsFooter,
                        'encodeLabels' => false,
                    ]); ?>
                </div>
            </div>
        </div>
    </section>

<!--<footer class="footer">-->
    <div class="container">
        <ul class="footer__socials">
            <li>
                <a class="footer__icon-wrapper" href="https://www.facebook.com/groups/sba.world/" target="_blank">
                    <svg class="footer__icon">
                        <use xlink:href="#icon-facebook"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="footer__icon-wrapper" href="https://www.instagram.com/sba_world/" target="_blank">
                    <svg class="footer__icon">
                        <use xlink:href="#icon-instagram"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="footer__icon-wrapper" href="http://vk.com/sba.world" target="_blank">
                    <svg class="footer__icon">
                        <use xlink:href="#icon-vk"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="footer__icon-wrapper" href="https://www.youtube.com/channel/UCX-A-9l-b-HVk4MpDKu595Q" target="_blank">
                    <svg class="footer__icon">
                        <use xlink:href="#icon-youtube"></use>
                    </svg>
                </a>
            </li>
        </ul>
        <p class="copyrights tac">&copy; <?= date('Y') ?> SBA. All rights reserved.</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
