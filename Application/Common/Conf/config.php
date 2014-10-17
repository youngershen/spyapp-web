<?php
return array(
    //'DEFAULT_MODULE' => 'Home', //默认模块
    'URL_MODEL' => '1', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_CASE_INSENSITIVE' =>true,
    //db config
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'think',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => 3306,        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀
    'DB_SUFFIX'             => '',          // 数据库表后缀
    'DB_FIELDTYPE_CHECK'    => true,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        => 0,           // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        => false,       // 数据库读写是否分离 主从式有效

    'DB_FIELDS_CACHE'=>false, //关闭字段缓存
    'USER_CONFIG' => array(
        'USER_AUTH' => true,
        'USER_TYPE' => 2,
    ),
    'MULTI_MODULE' => true,
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES'=>array(
        'article/:id'=>'/index/article/:1',
    ),


);