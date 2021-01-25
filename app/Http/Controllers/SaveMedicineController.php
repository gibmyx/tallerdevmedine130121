<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

final class SaveMedicineController extends Controller
{
    public function __invoke()
    {
        return new JsonResponse('', JsonResponse::HTTP_CREATED);
    }
}
