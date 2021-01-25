<?php

declare(strict_types=1);


namespace Medine\Gibmyx\Application\UseCases;


use Medine\Gibmyx\Application\Commands\PeliculaCommand;
use Medine\Gibmyx\Domain\Repository\PeliculasRepository;

final class CrearPeliculaUseCases
{
    private $repository;

    public function __construct(PeliculasRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(PeliculaCommand $command)
    {
        $this->repository->save($command->getProp());
    }
}
