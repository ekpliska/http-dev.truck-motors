<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail/',  // Шаблоны писем
            'htmlLayout' => 'layouts/template-record',    // Макеты писем (layouts), HTML версия
            'messageConfig' => [
                'charset' => 'UTF-8',   // Кодировка писем UTF-8
                'from' => ['noreply@site.com' => 'Site Name'],  // Задаем e-mail адрес и имя отправителя по умолчанию
            ],
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => '',
//                'username' => '',
//                'password' => '',
//                'port' => '',
//                'encryption' => 'tls',
//            ],
            'useFileTransport' => true, // Флаг указывающий на то, что бы письма не отправлялись а сохранялись в папку runtime/mail
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
        'db' => $db,
        /*
         * Настройка ЧПУ
         */        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'service' => 'site/service',
                'service/record-ind' => 'site/record-ind',
                'service/record-leg' => 'site/record-leg',
                'about' => 'site/about',
                'login' => 'site/login',
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
