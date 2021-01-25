<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Update;

use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Domain\ValueObjects\LibroId;

final class LibroUpdater
{
    private $repository;

    public function __construct(LibroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(LibroUpdaterRequest $request)
    {
        $id = new LibroId($request->id());

        $this->repository->update($id, $request->toString());
    }
}
