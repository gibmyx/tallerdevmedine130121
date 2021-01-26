<?php

declare(strict_types=1);

namespace Medine\Daniel\Infrastructure;

use Illuminate\Database\Capsule\Manager;
use Medine\Daniel\Domain\Libro;
use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Domain\ValueObjects\LibroId;

final class MySqlLibroRepository implements LibroRepository
{

    public function save(Libro $libro)
    {
        $params = [
            'uuid' => $libro->id()->uuid(),
            'nombre' => $libro->nombre()->text(),
            'autor' => $libro->autor()->text(),
            'edicion' => $libro->edicion()->text(),
            'editorial' => $libro->editorial()->text(),
            'fecha_publicacion' => $libro->fechaPublicacion()->date()
        ];

        \App\Libro::create($params);
    }

    public function update(LibroId $id, array $params)
    {
        $libro = \App\Libro::where('uuid', $id->uuid());

        $libro->update($params);
    }

    public function delete(LibroId $id)
    {
        $libro = \App\Libro::where('uuid', $id->uuid());

        $libro->delete();
    }
}
