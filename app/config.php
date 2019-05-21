<?php

return [

    'name' => getenv('APP_NAME') ?? 'Application name',

    'environment' => getenv('APP_ENVIRONMENT') ?? 'development',

    'providers' => [
        // Framework providers
        \OneMustCode\ApiFramework\Providers\ErrorHandlerProvider::class,
        \OneMustCode\ApiFramework\Providers\RequestProvider::class,
        \OneMustCode\ApiFramework\Providers\ConfigProvider::class,
        \OneMustCode\ApiFramework\Providers\RouterProvider::class,

        // Custom providers here

    ],

];