<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'name@gmail.com',
                'password' => 'pass',
                'port' => '587', // Port 25 is a very common port too
                'encryption' => 'tls', // It is often used, check your provider or mail server specs
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
            ],
        ],

        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => [
                'ROLE', // TODO: need write role
            ],
            'itemFile' => '@common/components/rbac/config/items.php',
            'assignmentFile' => '@common/components/rbac/config/assignments.php',
            'ruleFile' => '@common/components/rbac/config/rules.php'
        ]

    ],
];
