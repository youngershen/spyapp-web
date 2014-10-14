<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' =>[
        'user' => [
            'class' => 'common\modules\UserModule\UserModule',
        ],
        'article'=>[
            'class' => 'common\modules\ArticleModule\ArticleModule',
        ],
        'shop' =>[
            'class'=>'common\modules\ShopModule\ShopModule',
        ],
    
    ],
];
