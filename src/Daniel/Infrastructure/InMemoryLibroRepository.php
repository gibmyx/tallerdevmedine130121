<?php

declare(strict_types=1);

namespace Medine\Daniel\Infrastructure;

use Medine\Daniel\Domain\Libro;
use Medine\Daniel\Domain\LibroRepository;

final class InMemoryLibroRepository implements LibroRepository
{

    public function save(Libro $libro)
    {
        // TODO: Implement save() method.
    }
}
