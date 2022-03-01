<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [       
            'class' => 'yii\web\UrlManager',
                // Disable index.php
            'showScriptName' => false,
                // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(
                        
                    ),
            ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
