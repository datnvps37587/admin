<?php

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

return [
    'middlewareGroups' => [
        'api' => [
            EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ],

    'middlewareAliases' => [
        'auth' => \App\Http\Middleware\Authenticate::class,
    ],
];
