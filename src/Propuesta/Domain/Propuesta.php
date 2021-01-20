<?php

declare(strict_types=1);

namespace Taller\Propuesta\Domain;

final class Propuesta
{
    private $nombre;
    private $apellido;
    private $cantidadPrestamo;
    private $debeFactura;
    private $edad;
    private $sueldo;

    public function __construct(
        string $nombre,
        string $apellido,
        float $cantidadPrestamo,
        ?string $debeFactura,
        int $edad,
        float $sueldo
    )
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cantidadPrestamo = $cantidadPrestamo;
        $this->debeFactura = $debeFactura;
        $this->edad = $edad;
        $this->sueldo = $sueldo;

    }

    public function nombre(): string
    {
        return $this->nombre;
    }

    public function apellido(): string
    {
        return $this->apellido;
    }

    public function cantidadPrestamo(): float
    {
        return $this->cantidadPrestamo;
    }

    public function debeFactura(): ?string
    {
        return $this->debeFactura;
    }

    public function edad(): int
    {
        return $this->edad;
    }

    public function sueldo(): float
    {
        return $this->sueldo;
    }
}
