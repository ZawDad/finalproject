<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            //'showScriptName' => false,
            'class' => 'yii\web\UrlManager',
            'hostInfo' => 'http://localhost/backend',
            'rules' => [
            ],
        ],
        'urlManagerBackend' =>[
            'enablePrettyUrl' => true,
            'class' => 'yii\web\UrlManager',
            'hostInfo' => 'http://localhost:8383/shawn.wright-finalproject1.1/backend/web/index.php',
            'baseUrl' => 'http://localhost:8383/shawn.wright-finalproject1.1/backend/web/index.php',
        ],
    
    ],
    'params' => $params,
];
