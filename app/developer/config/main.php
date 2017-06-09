<?php
$params = array_merge(
    require(__DIR__ . '/../../../common/config/params.php'),
    require(__DIR__ . '/../../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => '开发者中心',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'ucenter\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class' => 'ucenter\modules\admin\Module',
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-ucenter',
        ],

        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-sample',
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
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];
