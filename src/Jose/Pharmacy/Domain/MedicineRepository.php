<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Domain;

use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;

interface MedicineRepository
{
    public function save(Medicine $medicine): void;
    public function update(MedicineId $id, array $params);
    public function delete(MedicineId $id);
}
