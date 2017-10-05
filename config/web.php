<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [


        'cart' => [
            'class' => 'app\components\Cart'
        ],

        
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'asdasd7s9g8sdg7sdgsd7g89',
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
            'viewPath' => '@app/mail',
            'htmlLayout' => 'layouts/html',
            'textLayout' => 'layouts/text',

            'messageConfig' => [
                
                'from' => ['aleksej-feb@yandex.ru' => 'Алёша'],
                
            ],
            
            'useFileTransport' => false,
            
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'aleksej-feb@yandex.ru',
                'password' => '90963555789123asd',
                'port' => '465',
                'encryption' => 'ssl',
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

        'db' => $db,
        'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [   
        '<controller:(site)>/<action:(catalog)>/<brand:\d+>' => '<controller>/<action>/<brand>',     
        'request-password-reset' => 'site/<action>',
        

            'addcart' => 'site/addCart',
            'request-password-reset' => 'site/request-password-reset',
            'reset-password' => 'site/reset-password',
            '<action:\w+>' => 'site/<action>',
            '<action:\w+>/catalog' => 'catalog/<brand:\w+>',
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
