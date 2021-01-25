<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

use Medine\Jose\Pharmacy\Domain\Medicine;
use Medine\Jose\Pharmacy\Domain\MedicineRepository;

final class MedicineCreator
{
    private $repository;

    public function __construct(MedicineRepository $repository)
    {

        $this->repository = $repository;
    }

    public function __invoke(MedicineCreatorRequest $medicineCreatorRequest)
    {
     $medicine = new Medicine(
         $medicineCreatorRequest->id(),
         $medicineCreatorRequest->name(),
         $medicineCreatorRequest->brand(),
         $medicineCreatorRequest->price(),
         $medicineCreatorRequest->miligrams()
     );

     $this->repository->save($medicine);
    }
}
