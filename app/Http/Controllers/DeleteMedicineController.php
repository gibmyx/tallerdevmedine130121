<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Medine\Jose\Pharmacy\Application\RemoveMedicine;
use Symfony\Component\HttpFoundation\JsonResponse;

final class DeleteMedicineController extends Controller
{
    private $removeMedicine;

    public function __construct(RemoveMedicine $removeMedicine)
    {
        $this->removeMedicine = $removeMedicine;
    }

    public function __invoke(string $id)
    {
        $this->removeMedicine->__invoke(
            $id
        );

        return new JsonResponse('', JsonResponse::HTTP_CREATED);
    }
}
