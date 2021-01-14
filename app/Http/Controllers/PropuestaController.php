<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Taller\Propuesta\Application\PropuestaCreator;
use Taller\Propuesta\Application\PropuestaRequest;
use Taller\Propuesta\Domain\PropuestaRepository;
use Taller\Propuesta\Infrastructure\PropuestaEloquentRepository;

class PropuestaController extends Controller
{
    private $creator;

    public function __construct(PropuestaCreator $creator)
    {
        $this->creator = $creator;
    }

    public function save_propuesta(Request $request): JsonResponse
    {
        try {
            $creator = $this->creator;
            ($creator)(new PropuestaRequest(
                $request->input('param.nombre'),
                $request->input('param.apellido'),
                $request->input('param.cantidad_prestamo'),
                $request->input('param.debe_factura'),
                $request->input('param.edad'),
                $request->input('param.sueldo')
            ));
            return response()->json(['mensaje' => "guardado"]);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    public function get_propuestas(Request $request): JsonResponse
    {
        $response = [
            [
                'id' => 1,
                'nombre' => "Mark",
                'apellido' => "Otto",
                'edad' => 25,
                'saldo' => 800,
                'sexo' => "hombre",
                'cantidad_prestamo' => 20.000,
                'debe_factura' => "si"
            ],
            [
                'id' => 2,
                'nombre' => "Jacob",
                'apellido' => "Thornton",
                'edad' => 40,
                'saldo' => 1500,
                'sexo' => "mujer",
                'cantidad_prestamo' => 50.000,
                'debe_factura' => "no"
            ],
        ];

        return response()->json($response);
    }

    public function delete_propuesta(Request $request): JsonResponse
    {
        return response()->json(['mensaje' => "delete"]);
    }

    public function update_propuesta(Request $request): JsonResponse
    {
        return response()->json(['mensaje' => "update"]);
    }
}
