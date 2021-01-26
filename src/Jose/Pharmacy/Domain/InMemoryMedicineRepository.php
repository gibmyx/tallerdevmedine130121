<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Domain;

use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;

final class InMemoryMedicineRepository implements MedicineRepository
{

    public function save(Medicine $medicine): void
    {
        // TODO: Implement save() method.
    }
    public function update(MedicineId $id, array $params)
    {
        // TODO: Implement update() method.
    }

    public function delete(MedicineId $id)
    {
        // TODO: Implement delete() method.
    }
}
