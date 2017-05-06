<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=xinmeng_app',
            'username' => 'gljgljglj',
            'password' => 'gljgogo',
            'charset' => 'utf8',

        ],
        'db_ucenter' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=xinmeng_ucenter',
            'username' => 'gljgljglj',
            'password' => 'gljgogo',
            'charset' => 'utf8',
            'tablePrefix' => 'xx_'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
