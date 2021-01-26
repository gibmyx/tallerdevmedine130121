<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Update;

use Illuminate\Http\Request;

final class LibroUpdaterRequest
{
    private $id;
    private $nombre;
    private $autor;
    private $edicion;
    private $editorial;
    private $fecha_publicacion;

    public function __construct(
        string $id,
        ?string $nombre,
        ?string $autor,
        ?string $edicion,
        ?string $editorial,
        ?string $fecha_publicacion
    )
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->edicion = $edicion;
        $this->editorial = $editorial;
        $this->fecha_publicacion = $fecha_publicacion;
    }


    public function id(): string
    {
        return $this->id;
    }

    public function nombre(): ?string
    {
        return $this->nombre;
    }

    public function autor(): ?string
    {
        return $this->autor;
    }

    public function edicion(): ?string
    {
        return $this->edicion;
    }

    public function editorial(): ?string
    {
        return $this->editorial;
    }

    public function fecha_publicacion(): ?string
    {
        return $this->fecha_publicacion;
    }

    public function toArray(): array
    {
        return array_filter([
            'nombre'            => $this->nombre(),
            'autor'             => $this->autor(),
            'edicion'           => $this->edicion(),
            'editorial'         => $this->editorial(),
            'fecha_publicacion' => $this->fecha_publicacion()
        ]);
    }

}
