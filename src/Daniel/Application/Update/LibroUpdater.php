<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Update;

use Medine\Daniel\Application\Create\LibroCreatorRequest;
use Medine\Daniel\Domain\Libro;
use Medine\Daniel\Domain\LibroRepository;

final class LibroUpdater
{
    private $repository;

    public function __construct(LibroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(LibroCreatorRequest $request)
    {
        $libro = new Libro(
            $request->id(),
            $request->nombre(),
            $request->autor(),
            $request->edicion(),
            $request->editorial(),
            $request->fechaPublicacion()
        );

        $this->repository->save($libro);
    }
}
