<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Features
        [
            'section' => 'Features',
        ],
        [
            'title' => 'Services',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'services',
            'visible' => 'preview',
        ],
        [
            'title' => 'Skills',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'skills',
            'visible' => 'preview',
        ],
        [
            'title' => 'Reviews',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'reviews',
            'visible' => 'preview',
        ],
        [
            'title' => 'Portfolios',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'portfolios',
            'visible' => 'preview',
        ],
        [
            'title' => 'About me',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'about-me',
            'visible' => 'preview',
        ]
    ]

];
