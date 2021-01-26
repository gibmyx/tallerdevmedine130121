<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Domain;

use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineBrand;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineMiligrams;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineName;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicinePrice;

final class Medicine
{
    private $id;
    private $name;
    private $brand;
    private $miligrams;
    private $price;

    public function __construct(
        MedicineId $id,
        MedicineName $name,
        MedicineBrand $brand,
        MedicineMiligrams $miligrams,
        MedicinePrice $price
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->miligrams = $miligrams;
        $this->price = $price;
    }

    public function id(): MedicineId
    {
        return $this->id;
    }

    public function name(): MedicineName
    {
        return $this->name;
    }

    public function brand(): MedicineBrand
    {
        return $this->brand;
    }

    public function miligrams(): MedicineMiligrams
    {
        return $this->miligrams;
    }

    public function price(): MedicinePrice
    {
        return $this->price;
    }
}
