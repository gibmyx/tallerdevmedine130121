<?php

declare(strict_types=1);

namespace Medine\Daniel\Infrastructure;

use Medine\Daniel\Domain\Libro;
use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Domain\ValueObjects\LibroId;

final class InMemoryLibroRepository implements LibroRepository
{

    public function save(Libro $libro)
    {
        // TODO: Implement save() method.
    }

    public function update(LibroId $id, array $params)
    {
        // TODO: Implement update() method.
    }

    public function delete(LibroId $id)
    {
        // TODO: Implement delete() method.
    }
}
