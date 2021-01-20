<?php

declare(strict_types=1);


namespace App\src\Propuesta\Infrastructure\EloquentRepository;


use App\Propuesta;
use App\src\Propuesta\Domain\Repository\PropuestaRepository;

final class PropuestaEloquentRepository implements PropuestaRepository
{
    private $model;

    public function __construct(Propuesta $model)
    {
        $this->model = $model;
    }

    public function save(array $params): void
    {
        $this->model->create($params);
    }

    public function delete(int $id): void
    {
        $propuesta = $this->model->Find($id);
        if(!empty($propuesta))
            $propuesta->delete();
    }

    public function Find(int $id): ?Propuesta
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
            throw new \Exception("No se puede actualizar la propuesta");

        $model->update($params);
    }
}
