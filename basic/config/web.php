<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'satellite',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin'
        ],
        'rent' => [
            'class' => 'app\modules\rent\Module',
            'layout' => 'admin'
        ],
        'rentbox' => [
            'class' => 'app\modules\rentbox\Module',
            'layout' => 'rentbox'
        ]
    ],
    'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/basic',
                'baseUrl' => '@app/themes/basic',
                'pathMap' => [
                    '@app/views' => '@app/themes/basic',
                ],
            ]
        ],
        'str2url' => [
            'class' => 'app\components\str2url',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sjVhmKYfTYxZ9IzsJbpGLgMlZ_9BQIMo',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'mail' => [
         'class' => 'yii\swiftmailer\Mailer',
         //'useFileTransport' => true,
         'transport' => [
             'class' => 'Swift_SmtpTransport',
             'host' => 'smtp.yandex.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
             'username' => 'satellitenn.store@yandex.ru',
             'password' => 'avatar910',
             'port' => '587', // Port 25 is a very common port too
             'encryption' => 'tls', // It is often used, check your provider or mail server specs
         ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'add' => 'site/add',
                'remove' => 'site/remove',
                'search/<id>' => 'site/search',
                'cart/<id>' => 'site/order',
                'cart' => 'site/cart',
                'contacts' => 'site/contacts',
                'category/<id>' => 'site/category',
                'catalog' => 'site/catalog',
                'callback' => 'site/callback',
                'product/<id>' => 'site/product',
                'pages/<id>' => 'site/pages',
                'production/gallery' => 'production/gallery',
                'production/<id>' => 'production/single',
                'admin/product/search/<id>' => 'admin/product/index',
                'admin/content/<id>' => 'admin/content/update',
                'admin/cart-setting/<id>' => 'admin/cart-setting/update',
            ],
        ],
        
    ],
    'params' => $params,
    
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
