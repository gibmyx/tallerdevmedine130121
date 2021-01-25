<?php

declare(strict_types=1);


namespace Medine\Gibmyx\Application\UseCases;


use Medine\Gibmyx\Application\Commands\PeliculaCommand;
use Medine\Gibmyx\Domain\Repository\PeliculasRepository;

final class UpdatePeliculaUseCases
{
    private $repository;

    public function __construct(PeliculasRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(PeliculaCommand $command)
    {
        $this->repository->update($command->getProp());
    }
}
