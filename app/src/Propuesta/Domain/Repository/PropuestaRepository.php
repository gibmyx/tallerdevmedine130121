<?php

declare(strict_types=1);


namespace App\src\Propuesta\Domain\Repository;


use App\Propuesta;

interface PropuestaRepository
{
    public function save(array $params): void;
    public function delete(int $id): void;
    public function Find(int $id): ?Propuesta;
    public function update(array $params): void;
}
