<?php

return [
    '__name' => 'admin-product-category-icon',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-product-category-icon.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-category-icon' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-category-icon' => NULL
            ],
            [
                'admin-product-category' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product-category.edit' => [
                'icon' => [
                    'label' => 'Icon',
                    'type' => 'text',
                    'rules' => [],
                    'xpos' => 'left-bottom-right'
                ]
            ]
        ]
    ]
];