<?php

namespace WeProDev\LaraNav\Config;

declare(strict_types=1);

use WeProDev\LaraNav\Enum\NavLinkTypeEnum;
use WeProDev\LaraNav\Enum\NavLocationEnum;

return [

    'default' => [
        // laranav.default.directory
        'directory' => 'LaraNav',
        // laranav.default.theme
        'theme' => 'LaraNav',
    ],

    // laranav.nav
    'nav' => [
        NavLocationEnum::MAIN->value => [
            [
                'title' => __('Home'),
                'type' => NavLinkTypeEnum::PATH->value,
                'url' => '/',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => __('About'),
                'type' => NavLinkTypeEnum::TOGGLE->value,
                'url' => '#',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [
                    [
                        'title' => 'About Us',
                        'type' => NavLinkTypeEnum::PATH->value,
                        'url' => '/about-us',
                        'permission' => null,
                        'active' => true,
                        'attributes' => [
                            'class' => 'nav-link',
                        ],
                        'parent_attributes' => [
                            'class' => 'nav-item',
                        ],
                        'children' => [],
                        'depth' => 1,
                    ],
                    [
                        'title' => 'Contact Us',
                        'type' => NavLinkTypeEnum::PATH->value,
                        'url' => '/contact-us',
                        'permission' => null,
                        'active' => true,
                        'attributes' => [
                            'class' => 'nav-link',
                        ],
                        'parent_attributes' => [
                            'class' => 'nav-item',
                        ],
                        'children' => [],
                        'depth' => 1,
                    ],
                ],
                'depth' => 0,
            ],
        ],
        NavLocationEnum::SIDE_NAV->value => [
            [
                'title' => __('Dashboard'),
                'type' => NavLinkTypeEnum::PATH->value,
                'url' => '/dashboard',
                'permission' => 'user.signed.in',
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => __('Users'),
                'type' => NavLinkTypeEnum::PATH->value,
                'url' => '/users',
                'permission' => 'admin.users.index',
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [
                    [
                        'title' => __('Users'),
                        'type' => NavLinkTypeEnum::PATH->value,
                        'url' => '/list',
                        'permission' => 'admin.users.list',
                        'active' => true,
                        'attributes' => [
                            'class' => 'nav-link',
                        ],
                        'parent_attributes' => [
                            'class' => 'nav-item',
                        ],
                        'children' => [],
                        'depth' => 1,
                    ],
                    [
                        'title' => __('Add a new user'),
                        'type' => NavLinkTypeEnum::ROUTE->value,
                        'url' => 'admin.users.create',
                        'permission' => 'admin.users.create',
                        'active' => false,
                        'attributes' => [
                            'class' => 'nav-link',
                        ],
                        'parent_attributes' => [
                            'class' => 'nav-item',
                        ],
                        'children' => [],
                        'depth' => 1,
                    ],
                ],
                'depth' => 0,
            ],
        ],
        NavLocationEnum::SIDE_NAV_BOTTOM->value => [
            [
                'title' => __('Sign Out'),
                'type' => NavLinkTypeEnum::TOGGLE->value,
                'url' => '#',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
        ],
        NavLocationEnum::TOP_NAV->value => [
            [
                'title' => __('Home'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'home',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => __('About Us'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'home.about',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
        ],
        NavLocationEnum::FOOTER->value => [
            [
                'title' => __('Home'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'home',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => __('About Us'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'home.about',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
        ],
        NavLocationEnum::PROFILE_NAV->value => [
            [
                'title' => __('My Profile'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'dashboard.profile',
                'permission' => null,
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
            [
                'title' => __('Inbox'),
                'type' => NavLinkTypeEnum::ROUTE->value,
                'url' => 'dashboard.inbox',
                'permission' => 'dashboard.inbox',
                'active' => true,
                'attributes' => [
                    'class' => 'nav-link',
                ],
                'parent_attributes' => [
                    'class' => 'nav-item',
                ],
                'children' => [],
                'depth' => 0,
            ],
        ],
    ],
];
