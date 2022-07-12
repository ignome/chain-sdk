<?php
return [
    'host' => env('CHAIN_SERVER_HOST', 'http://127.0.0.1'),//主机
    'port' => env('CHAIN_SERVER_PORT', 8801),//端口
    'timeout' => env('CHAIN_SERVER_TIMEOUT', 60),//请求超时时间
];
