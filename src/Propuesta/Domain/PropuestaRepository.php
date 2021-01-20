<?php

declare(strict_types=1);

namespace Taller\Propuesta\Domain;

interface PropuestaRepository
{
    public function save(Propuesta $propuesta): void;
}
