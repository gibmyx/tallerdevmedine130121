<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

use Medine\Jose\Pharmacy\Domain\MedicineRepository;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;

final class MedicineUpdater
{
    private $medicineRepository;

    public function __construct(MedicineRepository $medicineRepository)
    {
        $this->medicineRepository = $medicineRepository;
    }

    public function __invoke(MedicineUpdaterRequest $medicineUpdaterRequest)
    {
        $id = new MedicineId($medicineUpdaterRequest->id());

        $this->medicineRepository->update($id, $medicineUpdaterRequest->toString());
    }

}
