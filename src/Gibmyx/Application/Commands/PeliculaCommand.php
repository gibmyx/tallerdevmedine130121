<?php

declare(strict_types=1);

namespace Medine\Gibmyx\Application\Commands;

use Carbon\Carbon;

final class PeliculaCommand
{
    private $id;
    private $titulo;
    private $genero;
    private $duracion;
    private $director;
    private $estreno;

    public function __construct(
        string $id,
        string $titulo,
        string $genero,
        string $duracion,
        string $director,
        string $estreno
    )
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->director = $director;
        $this->estreno = $estreno;
    }

    public function Id(): string
    {
        return $this->id;
    }

    public function Titulo(): string
    {
        return $this->titulo;
    }

    public function Genero(): string
    {
        return $this->genero;
    }

    public function Duracion(): string
    {
        return $this->duracion;
    }

    public function Director(): string
    {
        return $this->director;
    }

    public function Estreno(): string
    {
        return $this->estreno;
    }

    public function getProp(): array
    {
        return get_object_vars($this);
    }
}
