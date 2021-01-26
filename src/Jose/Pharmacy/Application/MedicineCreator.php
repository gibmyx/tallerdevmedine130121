<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

use Medine\Jose\Pharmacy\Domain\Medicine;
use Medine\Jose\Pharmacy\Domain\MedicineRepository;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineBrand;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineMiligrams;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineName;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicinePrice;

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
         new MedicineId($medicineCreatorRequest->id()),
         new MedicineName($medicineCreatorRequest->name()),
         new MedicineBrand($medicineCreatorRequest->brand()),
         new MedicineMiligrams($medicineCreatorRequest->miligrams()),
         new MedicinePrice($medicineCreatorRequest->price())

     );
     $this->repository->save($medicine);
    }
}
