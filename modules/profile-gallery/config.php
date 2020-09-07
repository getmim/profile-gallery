<?php

return [
    '__name' => 'profile-gallery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/profile-gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/profile-gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'profile' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProfileGallery\\Model' => [
                'type' => 'file',
                'base' => 'modules/profile-gallery/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'profile-gallery' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'profile' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Profile\\Model\\Profile',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'profile',
                ],
                'title' => [
                    'type' => 'text'
                ],
                'images' => [
                    'type' => 'json',
                    'format' => 'profile-gallery-images'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'profile-gallery-images' => [
                'url' => [
                    'type' => 'media'
                ],
                'label' => [
                    'type' => 'text'
                ]
            ]
        ]
    ]
];