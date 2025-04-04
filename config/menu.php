<?php
return [

    'Home' => [
        'title' => 'Menu',
        'items' => [
            [
                'route-active' => 'dashboard',
                'label' => 'Dashboard',
                'icon' => 'home',
                'route-name' => 'dashboard',
                'admin-only' => false,
            ]
        ]
    ],



    'Master' => [
        'title' => 'Master',
        'items' => [
            [
                'route-active' => 'user',
                'label' => 'Users',
                'icon' => 'users',
                'route-name' => 'admin.user-index',
                'admin-only' => false,
            ],
            [
                'route-active' => 'category',
                'label' => 'Category',
                'icon' => 'cpu',
                'route-name' => 'admin.category-index',
                'admin-only' => false,
            ],
            [
                'route-active' => 'course',
                'label' => 'Course',
                'icon' => 'book',
                'route-name' => 'admin.course-index',
                'admin-only' => false,
            ],
            [
                'route-active' => 'materi',
                'label' => 'Modul',
                'icon' => 'book-open',
                'route-name' => 'admin.materi-index',
                'admin-only' => false,
            ],
        ]
    ],

    'Roadmap' => [
        'title' => 'Roadmap',
        'items' =>
        [
            [
                'route-active' => 'category',
                'label' => 'Category',
                'icon' => 'share-2',
                'route-name' => 'admin.roadmap-category',
                'admin-only' => false,
            ],
            [
                'route-active' => 'course',
                'label' => 'Course',
                'icon' => 'share-2',
                'route-name' => 'admin.roadmap-course',
                'admin-only' => false,
            ],
            [
                'route-active' => 'modul',
                'label' => 'Modul',
                'icon' => 'share-2',
                'route-name' => 'admin.roadmap-modul',
                'admin-only' => false,
            ],
        ]
    ]




];
