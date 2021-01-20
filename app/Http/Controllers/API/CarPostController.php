<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Taller\Cars\Application\CarCreator;
use Taller\Cars\Application\CarCreatorRequest;

final class CarPostController extends Controller
{
    private $creator;

    public function __construct(CarCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request)
    {
        ($this->creator)(new CarCreatorRequest(
            $request->input('id'),
            $request->input('name'),
            $request->input('brand'),
            $request->input('model')
        ));
        return new JsonResponse('', JsonResponse::HTTP_CREATED);
    }
}
