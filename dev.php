<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-01-01
 * Time: 20:06
 */

return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9501,
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            'worker_num' => 8,
            'task_worker_num' => 8,
            'reload_async' => true,
            'task_enable_coroutine' => true,
            'max_wait_time'=>3
        ],
    ],
    'MYSQL'  => [
        'host'          => 'rm-bp1hjaz85743cec88xo.mysql.rds.aliyuncs.com',
        'port'          => 3306,
        'user'          => 'root',
        'password'      => '5071024dongD',
        'database'      => 'woohim',
        'timeout'       => 5,
        'charset'       => 'utf8mb4',
    ],
    'REDIS' => [
        'host'          => '127.0.0.1',
        'port'          => '6379',
        'auth'          => '',
        'POOL_MAX_NUM'  => '20',
        'POOL_MIN_NUM'  => '5',
        'POOL_TIME_OUT' => '0.1',
    ],
    'VIEW_TEMPLATE' => 'resources/views/',
    'VIEW_TMP_TEMPLATE' => 'Temp/cache/views/',
    'TEMP_DIR' => null,
    'LOG_DIR' => null
];
