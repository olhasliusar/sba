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
