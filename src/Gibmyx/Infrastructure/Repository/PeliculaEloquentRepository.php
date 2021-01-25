<?php

declare(strict_types=1);

namespace Medine\Gibmyx\Infrastructure\Repository;

use Medine\Gibmyx\Domain\Repository\PeliculasRepository;
use Medine\Gibmyx\Domain\Models\Pelicula;

final class PeliculaEloquentRepository implements PeliculasRepository
{
    private $model;

    public function __construct(Pelicula $model)
    {
        $this->model = $model;
    }

    public function save(array $params): void
    {
        $this->model->create($params);
    }

    public function delete(array $params): void
    {
        $id = (int) isset($params['id']) && !empty($params['id']) ?  $params['id'] : 0;
        $pelicula = $this->model->find($id);
        if(!empty($pelicula))
            $pelicula->delete();
    }

    public function find(string $id): ?Pelicula
    {
        return $this->model->find($id);
    }

    public function update(array $params): void
    {
        $id = (int) isset($params['id']) && !empty($params['id']) ?  $params['id'] : 0;

        if(empty($id))
            return;

        $model = $this->Find($id);

        if(empty($model))
            throw new \Exception("No se puede actualizar la pelicula");

        $model->update($params);
    }
}
