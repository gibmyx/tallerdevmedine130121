<?php

declare(strict_types=1);

namespace Taller\Propuesta\Application;

use Taller\Propuesta\Domain\Propuesta;
use Taller\Propuesta\Domain\PropuestaRepository;

final class PropuestaCreator
{
    private $repository;

    public function __construct(PropuestaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(PropuestaRequest $request)
    {
        $propuesta = new Propuesta(
            $request->nombre(),
            $request->apellido(),
            $request->cantidadPrestamo(),
            $request->debeFactura(),
            $request->edad(),
            $request->sueldo()
        );
        $this->repository->save($propuesta);
    }
}
