<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SatelliteStyleMobile extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300',
        'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/mobile/css/animate.css',
        'css/mobile/css/materialize.min.css',
        'css/mobile/css/swipebox.min.css',
        'css/mobile/css/swiper.min.css',
        'css/mobile/css/normalize.css',
        'css/mobile/css/main.css?v=1.0.3',
        '/bower_components/font-awesome/css/font-awesome.min.css'


    ];
    public $js = [
        'js/mobile/js/helper.js',
        // 'js/mobile/js/vendor/HeadsUp.js',
        'js/mobile/js/vendor/chart.min.js',
        'js/mobile/js/vendor/jquery.mixitup.min.js',
        'js/mobile/js/vendor/jquery.swipebox.min.js',
        'js/mobile/js/vendor/masonry.min.js',
        'js/mobile/js/vendor/swiper.min.js',
        'js/mobile/js/vendor/materialize.min.js',
        'js/mobile/js/main.js',
        'js/site.js?v=1.0.3'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
