<?php

declare(strict_types=1);

namespace Taller\Cars\Application;

final class CarCreatorRequest
{
    private $id;
    private $name;
    private $brand;
    private $model;

    public function __construct(
        string $id,
        string $name,
        string $brand,
        string $model
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function brand(): string
    {
        return $this->brand;
    }

    public function model(): string
    {
        return $this->model;
    }
}
