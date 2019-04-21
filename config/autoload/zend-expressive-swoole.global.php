<?php

declare(strict_types=1);

use Zend\Expressive\Swoole\ConfigProvider;

return array_merge((new ConfigProvider())(), [
    'zend-expressive-swoole' => [
        'enable_coroutine' => true,
        'swoole-http-server' => [
            'host' => '127.0.0.1',
            'port' => 8088,
            'mode' => SWOOLE_PROCESS, // SWOOLE_BASE,
            'options' => [
                'log_level' => SWOOLE_LOG_INFO,
                'worker_num' => swoole_cpu_num() * 2,
                'enable_coroutine' => true,
            ],
        ],
    ],
]);
