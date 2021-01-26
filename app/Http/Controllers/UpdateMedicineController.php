<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Medine\Jose\Pharmacy\Application\MedicineUpdater;
use Medine\Jose\Pharmacy\Application\MedicineUpdaterRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

final class UpdateMedicineController extends Controller
{
    private $medicineUpdater;

    public function __construct(MedicineUpdater $medicineUpdater)
     {
         $this->medicineUpdater = $medicineUpdater;
     }
     public function __invoke(string $id, Request $request)
     {
         $this->medicineUpdater->__invoke(
             new MedicineUpdaterRequest($id, $request)
         );
         return new JsonResponse('', JsonResponse::HTTP_OK);

     }
}
