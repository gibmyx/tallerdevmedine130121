<?php

declare(strict_types=1);

namespace Taller\Propuesta\Infrastructure;

use Taller\Propuesta\Domain\Propuesta;
use Taller\Propuesta\Domain\PropuestaRepository;

final class PropuestaEloquentRepository implements PropuestaRepository
{

    public function save(Propuesta $propuesta): void
    {
        \App\Propuesta::create([
            "nombre" => $propuesta->nombre(),
            "apellido" => $propuesta->apellido(),
            "cantidad_prestamo" => $propuesta->cantidadPrestamo(),
            "debeFactura" => $propuesta->debeFactura(),
            "edad" => $propuesta->edad(),
            "saldo" => $propuesta->sueldo(),
            "sexo" => 'Masculino'
        ]);
    }
}
