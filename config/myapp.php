<?php

return [

    'mail_drivers'=> [
        'mail'    => 'Mail',
        'mailgun' => 'Mail Gun',
        'sendgrid' => 'Sendgrid',
        'smtp'    => 'SMTP'
    ],

    'admin_prefix'=>'admin',

    'public_prefix'=>'account',

    'homechurch' => [
        'per_page' => 10,
    ],

    'events' => [
        'per_page' => 20,
    ],

    'testimonials' => [
        'per_page' => 20,
    ],

    'announcements' => [
        'per_page' => 20,
    ],

    'groupchats' => [
        'per_page' => 20,
    ],

    'manuals' => [
        'per_page' => 20,
    ],


    'linkable_to_page' => ['testimonials','announcements','manuals','faqs','groupchats','homechurches','manuals'],

    'middleware' => [
        'backend' => [
            'auth.admin',
            'permissions',
        ],
        'account' => [
            'auth.account',
        ],
        'api' => [
            'web'
        ],
    ],

    'paypal' => [
        'mode' => 'sandbox',
        'endpoint' => 'https://api.sandbox.paypal.com',
        'connection' => 30,
        'log_enabled' => true,
        'log_storage_path' => storage_path('logs/paypal.log'),
        'log_level' => 'FINE'
    ],
];
