<?php
return [
    'customization' => [
        'title' => __( 'Customization', 'dav2' ),
        'icon'  => 'dashicons-admin-generic',
        'tmp'   => 'tmplMode',
        'submenu' => [

            'customization' => [
                'tmp'         => 'tmplMode',
                'title'       => __( 'Demo Content', 'dav2' ),
                'description' => __( 'Theme Demo Content', 'dav2' ),
            ],
            'czgeneral' => [
                'tmp'       => 'tmplGeneral',
                'title'     => __( 'General', 'dav2' ),
            ],

            'czhead' => [
                'tmp'   => 'tmplHead',
                'title' => __( 'Head', 'dav2' ),
            ],
            'czheader' => [
                'tmp'         => 'tmplHeader',
                'title'       => __( 'Header', 'dav2' ),
                'description' => __( 'Header main elements settings.', 'dav2' ),
            ],

            'czhome' => [
                'tmp'         => 'tmplHome',
                'title'       => __( 'Home', 'dav2' ),
                'description' => __( 'Home page main settings.', 'dav2' ),
            ],
            'czsingleproduct' => [
                'tmp'   => 'tmplSingleProduct',
                'title' => __( 'Single Product', 'dav2' ),
            ],
            'czCart' => [
                'tmp'   => 'tmplCart',
                'title' => __( 'Checkout', 'dav2' ),
            ],
            'czbooster' => [
                'tmp' => 'tmplOpc',
                'title' => __('Checkout Features', 'dav2'),
            ],
            'czabout' => [
                'tmp'   => 'tmplAbout',
                'title' => __( 'About Us', 'dav2' ),
            ],
            'czthankyou' => [
                'tmp'   => 'tmplThankyou',
                'title' => __( 'Thank You', 'dav2' ),
            ],
            'czcontactus' => [
                'tmp'   => 'tmplContactUs',
                'title' => __( 'Contact Us', 'dav2' ),
            ],
            'czsocial' => [
                'tmp'         => 'tmplSocial',
                'title'       => __( 'Social Media', 'dav2' ),
                'description' => __( 'Social media pages integration.', 'dav2' ),
            ],
            'czsubscribe' => [
                'tmp'         => 'tmplSubscribe',
                'title'       => __( 'Subscription Form', 'dav2' ),
                'description' => __( 'Subscription form settings for collecting users’ emails.', 'dav2' ),
            ],
            'czfooter' => [
                'tmp'         => 'tmplFooter',
                'title'       => __( 'Footer', 'dav2' ),
                'description' => __( 'Footer options and settings.', 'dav2' ),
            ],
            'czblog' => [
                'tmp'         => 'tmplBlog',
                'title'       => __( 'Blog', 'dav2' ),
                'description' => __( 'Blog settings.', 'dav2' ),
            ],
            'cz404' => [
                'tmp'         => 'tmpl404',
                'title'       => __( '404 page', 'dav2' ),
                'description' => __( '404 page settings.', 'dav2' ),
            ]
        ]
    ]
];


