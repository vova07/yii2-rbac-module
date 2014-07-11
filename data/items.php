<?php
return [
    'user' => [
        'type' => 1,
        'description' => 'User',
        'ruleName' => 'group',
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Admin',
        'ruleName' => 'group',
        'children' => [
            'user',
        ],
    ],
    'superadmin' => [
        'type' => 1,
        'description' => 'Superadmin',
        'ruleName' => 'group',
        'children' => [
            'admin',
        ],
    ],
];
