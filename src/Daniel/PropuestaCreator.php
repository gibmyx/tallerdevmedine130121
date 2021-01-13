<?php

declare(strict_types=1);

namespace PropuestaSystem\Daniel;

use App\Propuesta;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;

final class PropuestaCreator
{
    private $propuestaRequest;

    public function __construct(Request $propuestaRequest)
    {
        $this->propuestaRequest = $propuestaRequest;
    }

    public function __invoke()
    {
        $propuestaInfo      =   array_key_exists('param', $this->propuestaRequest->all())
            ? $propuestaInfo = $this->propuestaRequest->all()['param']
            : $propuestaInfo = $this->propuestaRequest->all();

        $params             =   [
            'nombre'            =>  $this->notEmpty($propuestaInfo['nombre']),
            'apellido'          =>  $this->notEmpty($propuestaInfo['apellido']),
            'edad'              =>  $this->notEmpty($propuestaInfo['edad']),
            'saldo'             =>  $this->notEmpty($propuestaInfo['sueldo']),
            'cantidad_prestamo' =>  $this->notEmpty($propuestaInfo['cantidad_prestamo']),
            'debe_factura'      =>  $propuestaInfo['debe_factura'],
            'sexo'              =>  $this->notEmpty($propuestaInfo['sexo'])
        ];

        return Propuesta::create($params);
    }

    private function notEmpty($value)
    {
        if (isset($value) && !empty($value))
            return $value;

        throw new \InvalidArgumentException("El valor no puede estar vacío");
    }
}
