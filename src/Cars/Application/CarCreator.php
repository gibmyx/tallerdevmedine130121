<?php

declare(strict_types=1);

namespace Taller\Cars\Application;

use Taller\Cars\Domain\Car;
use Taller\Cars\Domain\CarRepository;

final class CarCreator
{
    private $repository;

    public function __construct(CarRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CarCreatorRequest $request)
    {
        $car = new Car(
            $request->id(),
            $request->name(),
            $request->brand(),
            $request->model()
        );

        $this->repository->save($car);
    }
}
