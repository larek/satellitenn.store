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
class SatelliteStyle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sat_style.css?v=2.4.0',
        'css/site.css?v=2.4.4',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300',
        '/bower_components/font-awesome/css/font-awesome.min.css'


    ];
    public $js = [
        'js/site.js?v=1.0.4'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
