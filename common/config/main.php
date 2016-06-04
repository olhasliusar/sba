<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'dateFormat' => 'd-M-Y',
            'defaultTimeZone' => 'Europe/Kiev', // time zone
        ]
    ]
];
