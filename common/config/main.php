<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'ucenter\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false
        ],
    ],
];
