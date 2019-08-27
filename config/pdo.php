<?php
defined('FREAK_ACCESS') or exit('Access Denied');
return [
    'product' => [
        'read' => [],
        'write' => [],
    ],
    'develop' => [
        'weibo' => [
            'read' => [
                'dbname' => 'freak',
                'host' => '10.222.96.190',
                'port' => '3306',
                'user' => 'root',
                'password' => '123456',
            ],
            'write' => [
                'dbname' => 'freak',
                'host' => '10.222.96.190',
                'port' => '3306',
                'user' => 'root',
                'password' => '123456',
            ],
        ],
        'weibo1' => [
            'read' => [
                'dbname' => 'liuhui',
                'host' => '10.210.237.104',
                'port' => '3306',
                'user' => 'root',
                'password' => '1qaz2wsx',
            ],
            'write' => [
                'dbname' => 'liuhui',
                'host' => '10.210.237.104',
                'port' => '3306',
                'user' => 'root',
                'password' => '1qaz2wsx',
            ],
        ],
    ]



];