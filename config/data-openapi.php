<?php

declare(strict_types=1);

// config for Overbeck/LaravelDataOpenAPI
return [
    /*
     * The output path for the generated OpenAPI spec.
     */

    'output_path' => storage_path('openapi'),

    /*
     * OpenAPI default spec.
     *
     * See https://spec.openapis.org/ or https://swagger.io/specification for more information.
     * Chinese See: https://openapi.apifox.cn/
     *
     * @see https://spec.openapis.org/oas/v3.0.3
     */

    'default' => [
        /*
         * OpenAPI spec version.
         */

        'version' => '3.0.3',

        /*
         * OpenAPI spec info.
         */

        'info' => [
            'title' => 'Laravel Data OpenAPI',
            'description' => 'Laravel Data OpenAPI',
            'contact' => [
                'name' => 'Overbeck.jack',
                'email' => 'overbeck.jack@qq.com',
                'url' => 'https://github.com/shuqingzai/laravel-data-openapi',
            ],
            'license' => [
                'name' => 'Apache 2.0',
                'url' => 'https://www.apache.org/licenses/LICENSE-2.0.html',
            ],
            'termsOfService' => '',
            'version' => '1.0.0',
        ],

        /*
         * OpenAPI spec servers.
         */

        'servers' => [
            [
                'url' => env('APP_URL'),
                'description' => 'Local server',
                'variables' => [],
            ],
        ],

        /*
         * OpenAPI spec tags.
         */

        'tags' => [
            //[
            //  'name'        => 'user',
            //  'description' => 'Application users',
            //],
        ],

        /*
         * OpenAPI spec security.
         */

        'security' => [
            // GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityRequirement::create()->securityScheme('JWT'),
        ],

        /*
         * OpenAPI spec securitySchemes.
         */

        'securitySchemes' => [
            //
        ],

        /*
         * OpenAPI spec components.
         */

        'components' => [
            //
        ],

        /*
         * OpenAPI spec paths.
         */

        'paths' => [
            //
        ],

        /*
         * OpenAPI spec externalDocs.
         */

        'externalDocs' => [
            'description' => 'Find more info here',
            'url' => '',
        ],

        /*
         * OpenAPI spec extensions.
         */

        'extensions' => [
            // 'x-tagGroups' => [
            //     [
            //         'name' => 'General',
            //         'tags' => [
            //             'user',
            //         ],
            //     ],
            // ],
        ],
    ],
];
