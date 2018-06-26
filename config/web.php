<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$email_comfig = require __DIR__ . '/config_email.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'esEvWRx4rcV_k1v7uo5O_qKWhwGIDIn_',
            'baseUrl' => ''
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
        /*
         * Настройка отправки писем
         */
        'mailer' => $email_comfig,
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        /*
         * Настройка ЧПУ
         */        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'sitemap.xml' => 'site/sitemap',
                'service-rec' => 'site/service-rec',
                'service/record-ind' => 'site/record-ind',
                'service/record-leg' => 'site/record-leg',
                'main-services' => 'site/main-services',
                'main-services/<slug>' => 'main-services/view',
                'privacy-policy' => 'site/privacy-policy',
                'about' => 'site/about',
                'login' => 'site/login',
                'news/page/<page:\d+>' => 'site/news',                
                'news' => 'site/news',                
                'news/<slug>' => 'news/view',
//                'articles/page/<page:\d+>' => 'site/articles',                
//                'articles' => 'site/articles',
//                '<slug>' => 'articles/view',
                'contact' => 'site/contact',
            ],
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'language' => 'ru',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin',
            'defaultRoute' => 'admin/index',
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            'imagesStorePath' => '@webroot/images/upload/store', //path to origin images
            'imagesCachePath' => '@webroot/images/upload/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick' 
            'placeHolderPath' => '@web/images/placeHolder.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
