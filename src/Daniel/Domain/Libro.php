<?php

declare(strict_types=1);

namespace Medine\Daniel\Domain;

use Medine\Daniel\Domain\ValueObjects\LibroAutor;
use Medine\Daniel\Domain\ValueObjects\LibroEdicion;
use Medine\Daniel\Domain\ValueObjects\LibroEditorial;
use Medine\Daniel\Domain\ValueObjects\LibroFechaPublicacion;
use Medine\Daniel\Domain\ValueObjects\LibroId;
use Medine\Daniel\Domain\ValueObjects\LibroNombre;

final class Libro
{
    private $id;
    private $nombre;
    private $autor;
    private $edicion;
    private $editorial;
    private $fecha_publicacion;

    public function __construct(
        LibroId $id,
        LibroNombre $nombre,
        LibroAutor $autor,
        LibroEdicion $edicion,
        LibroEditorial $editorial,
        LibroFechaPublicacion $fecha_publicacion
    )
    {
        $this->id                = $id;
        $this->nombre            = $nombre;
        $this->autor             = $autor;
        $this->edicion           = $edicion;
        $this->editorial         = $editorial;
        $this->fecha_publicacion = $fecha_publicacion;
    }

    public function id(): LibroId
    {
        return $this->id;
    }

    public function nombre(): LibroNombre
    {
        return $this->nombre;
    }

    public function autor(): LibroAutor
    {
        return $this->autor;
    }

    public function edicion(): LibroEdicion
    {
        return $this->edicion;
    }

    public function editorial(): LibroEditorial
    {
        return $this->editorial;
    }

    public function fechaPublicacion(): LibroFechaPublicacion
    {
        return $this->fecha_publicacion;
    }
}
