<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Remove;

use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Domain\ValueObjects\LibroId;

final class LibroRemover
{
    private $repository;

    public function __construct(LibroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $id): void
    {
        $id = new LibroId($id);

        $this->repository->delete($id);
    }
}
