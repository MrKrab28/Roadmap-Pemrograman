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
                'label' => 'Materi',
                'icon' => 'book-open',
                'route-name' => 'admin.materi-index',
                'admin-only' => false,
            ],
        ]
    ],




];
