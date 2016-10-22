<?php
require_once 'bower_components/Mobile_Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() && !$detect->isTablet()) {
 	$configFile = 'web-mobile.php';
}else{
	$configFile = 'web.php';
}
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/basic/vendor/autoload.php');
require(__DIR__ . '/basic/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/basic/config/'.$configFile);

(new yii\web\Application($config))->run();
