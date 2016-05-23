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
        //'css/site.css',
        'tema/css/bootstrap.min.css',
        'tema/css/ionicons.min.css',
        'tema/css/style.css',

    ];
    public $js = [
      'tema/js/jquery-1.11.1.min.js',
      'tema/js/bootstrap.min.js',
      'tema/js/jquery.min.js',
      'tema/js/custom.js',
      'tema/js/jquery.easing.min.js',
      'tema/js/scrolling-nav.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
