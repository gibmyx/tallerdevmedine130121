<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Medine\Jose\Pharmacy\Application\MedicineCreator;
use Medine\Jose\Pharmacy\Application\MedicineCreatorRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

final class SaveMedicineController extends Controller
{
    private $creator;

    public function __construct(MedicineCreator $medicineCreator)
    {
        $this->creator = $medicineCreator;
    }

    public function __invoke(Request $request)
    {
        ($this->creator)(new MedicineCreatorRequest(
            $request->input('id'),
            $request->input('name'),
            $request->input('brand'),
            (float) $request->input('miligrams'),
            (float) $request->input('price')
        ));
        return new JsonResponse('', JsonResponse::HTTP_CREATED);
    }
}
