<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

use Medine\Jose\Pharmacy\Domain\MedicineRepository;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;

final class RemoveMedicine
{
    private $repository;

    public function __construct(MedicineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $id): void
    {
        $id = new MedicineId($id);

        $this->repository->delete($id);
    }
}
