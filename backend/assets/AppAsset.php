<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/bootstrap.css',

     //   'css/weather-icons/css/weather-icons.min.css',
     //   'css/animate.css/animate.min.css',
     //   'css/whirl/dist/whirl.css',
     //   'css/weather-icons/css/weather-icons.min.css',

    //    'css/simple-line-icons/css/simple-line-icons.css',
    //    'css/fontawesome/css/font-awesome.min.css',
   //     'css/app.css',


    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
