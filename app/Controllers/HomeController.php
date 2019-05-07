<?php declare(strict_types=1);

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController
{
    public function __invoke()
    {
        $response = JsonResponse::create([
            'Hello world!'
        ]);

        return $response->send();
    }
}