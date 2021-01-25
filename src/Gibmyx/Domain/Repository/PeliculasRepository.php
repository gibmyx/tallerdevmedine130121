<?php

declare(strict_types=1);

namespace Medine\Gibmyx\Domain\Repository;

use Medine\Gibmyx\Domain\Models\Pelicula;

interface PeliculasRepository
{
    public function save(array $params): void;
    public function delete(array $params): void;
    public function find(string $id): ?Pelicula;
    public function update(array $params): void;
}
