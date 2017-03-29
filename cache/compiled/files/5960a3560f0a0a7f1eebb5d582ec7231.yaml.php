<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/farmchinski/user/config/system.yaml',
    'modified' => 1490725685,
    'data' => [
        'home' => [
            'alias' => '/blog'
        ],
        'pages' => [
            'theme' => 'receptar',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => true
            ]
        ],
        'languages' => [
            'supported' => [
                0 => 'en',
                1 => 'de',
                2 => 'es',
                3 => 'cs',
                4 => 'fi',
                5 => 'fr',
                6 => 'it',
                7 => 'nb',
                8 => 'nl',
                9 => 'el',
                10 => 'pt',
                11 => 'ro',
                12 => 'ru',
                13 => 'pl'
            ],
            'http_accept_language' => true,
            'home_redirect' => [
                'include_lang' => true,
                'include_route' => false
            ],
            'session_store_active' => false
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
