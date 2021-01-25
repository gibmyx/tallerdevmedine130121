<?php

declare(strict_types=1);


namespace Medine\Daniel\Domain;


use Medine\Daniel\Domain\ValueObjects\LibroId;

interface LibroRepository
{
    public  function save(Libro $libro);
    public function update(LibroId $id, array $params);
}
