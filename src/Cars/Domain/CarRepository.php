<?php

declare(strict_types=1);

namespace Taller\Cars\Domain;

interface CarRepository
{
    public function save(Car $car): void;
}
