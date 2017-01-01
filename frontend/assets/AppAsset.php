<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fonts.css',
        'css/form.css',
        'css/site.css',
        'css/article.css',
        'css/link.css',
        'css/animate.css',
        'css/animation.css',
    ];
    public $js = [
        'js/main.js',
        'js/form.js',
        'js/lib/parallax.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
