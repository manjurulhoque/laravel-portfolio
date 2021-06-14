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
            'title' => 'About me',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'page' => 'about-me',
            'visible' => 'preview',
        ]
    ]

];
