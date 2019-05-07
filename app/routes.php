<?php

$router->get('/{id}/products', [
    'class' => \App\Controllers\ProfileController::class,
    'method' => 'products',
    'params' => [
        'id' => '*',
    ],
]);
