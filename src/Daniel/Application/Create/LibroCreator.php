<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Create;

use Medine\Daniel\Domain\Libro;
use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Domain\ValueObjects\LibroAutor;
use Medine\Daniel\Domain\ValueObjects\LibroEdicion;
use Medine\Daniel\Domain\ValueObjects\LibroEditorial;
use Medine\Daniel\Domain\ValueObjects\LibroFechaPublicacion;
use Medine\Daniel\Domain\ValueObjects\LibroId;
use Medine\Daniel\Domain\ValueObjects\LibroNombre;

final class LibroCreator
{
    private $repository;

    public function __construct(LibroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(LibroCreatorRequest $request)
    {
//        dd($request);
        $libro = new Libro(
            new LibroId($request->id()),
            new LibroNombre($request->nombre()),
            new LibroAutor($request->autor()),
            new LibroEdicion($request->edicion()),
            new LibroEditorial($request->editorial()),
            new LibroFechaPublicacion($request->fechaPublicacion())
        );

        $this->repository->save($libro);
    }
}
