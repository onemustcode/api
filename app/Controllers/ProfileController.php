<?php declare(strict_types=1);

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

class ProfileController
{
    public function products(string $id)
    {
        $response = JsonResponse::create([
            [
                'sku' => '3456',
                'score' => 7.4,
            ],
            [
                'sku' => '7653',
                'score' => 6.8,
            ],
            [
                'sku' => '2735',
                'score' => 6,
            ],
            [
                'sku' => '235',
                'score' => 5.2,
            ],
        ]);

        return $response->send();
    }
}