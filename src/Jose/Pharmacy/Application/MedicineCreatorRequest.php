<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

final class MedicineCreatorRequest
{
    private $id;
    private $name;
    private $brand;
    private $miligrams;
    private $price;

    public function __construct(
        string $id,
        string $name,
        string $brand,
        float $miligrams,
        float $price
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->miligrams = $miligrams;
        $this->price = $price;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function brand(): string
    {
        return $this->brand;
    }

    public function miligrams(): float
    {
        return $this->miligrams;
    }

    public function price():float
    {
        return $this->price;
    }
}
