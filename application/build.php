<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    // 生成运行时目录
    '__dir__'  => ['runtime/cache', 'runtime/log', 'runtime/temp', 'runtime/template'],
    '__file__' => ['common.php', 'config.php', 'database.php', 'route.php'],

    // 定义index模块的自动生成
    'index'    => [
        '__file__'   => ['common.php', 'config.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index', 'Content', 'Empty'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 定义index模块的自动生成
    'admin'    => [
        '__file__'   => ['common.php', 'config.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index', 'Content', 'User'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 定义index模块的自动生成
    'user'    => [
        '__file__'   => ['common.php', 'config.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index', 'Content'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 定义index模块的自动生成
    'install'    => [
        '__file__'   => ['common.php', 'config.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index', 'Install'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 。。。 其他更多的模块定义
];
