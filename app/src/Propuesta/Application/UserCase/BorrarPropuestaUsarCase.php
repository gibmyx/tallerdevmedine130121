<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\UserCase;


use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use Illuminate\Http\Request;

final class BorrarPropuestaUsarCase
{
    private $params;
    private $repository;

    public function __construct(array $params, PropuestaRepository $repository)
    {
        $this->params = $params;
        $this->repository = $repository;
    }

    public function execute()
    {
        $params = $this->params;
        $id = (int) isset($params['id']) && !empty($params['id']) ?  $params['id'] : 0;
        $this->repository->delete($id);
    }
}
