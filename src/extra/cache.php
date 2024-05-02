<?php

return [
    // 驱动方式
    'type'   => 'complex',
    'default'=>[
        'type'   => 'File',//Redis、File
        // 设置缓存保存目录
        'path'   => WG_CACHE_PATH,
    ],
    // redis缓存
    'redis'=>[
        'type'           => 'redis',
        'host'           => '127.0.0.1',
        'port'           => 6379,
        'username'       => null,
        'password'       => '123456',
        'database'       => 0,
        'select'         => 1,
        'prefix'         => '',
    ],

    // 文件缓存
    'file'   =>  [
        // 驱动方式
        'type'   => 'file',
        // 设置不同的缓存保存目录
        'path'   => WG_CACHE_PATH,
    ],

    // 是否开启缓存备份功能
    'backup' => true,

    // 缓存前缀
    'prefix' => '',
    // 缓存有效期 0表示永久缓存
    'expire' => 0,
];