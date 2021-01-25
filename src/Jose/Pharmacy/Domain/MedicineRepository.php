<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Domain;

interface MedicineRepository
{
    public function save(Medicine $medicine): void;
}
