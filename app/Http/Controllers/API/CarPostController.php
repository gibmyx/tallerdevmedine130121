<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

final class CarPostController extends Controller
{
    public function __invoke()
    {
        return new JsonResponse('', JsonResponse::HTTP_CREATED);
    }
}
