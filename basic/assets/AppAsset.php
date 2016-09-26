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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'bower_components/fotorama/fotorama.css',
        'bower_components/OwlCarousel/owl-carousel/owl.carousel.css',
        'bower_components/fancybox/source/jquery.fancybox.css'
    ];
    public $js = [
        'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.ru.min.js',
        'bower_components/fotorama/fotorama.js',
        'bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js',
        'bower_components/fancybox/source/jquery.fancybox.js',
        'js/script.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
