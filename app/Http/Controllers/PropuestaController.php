<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PropuestaController extends Controller
{
    public function save_propuesta(Request $request): JsonResponse
    {
        return response()->json(['mensaje' => "guardado"]);
    }

    public function get_propuestas(Request $request): JsonResponse
    {
        $response = [
            [
                'id'=> 1,
                'nombre' => "Mark",
                'apellido' => "Otto",
                'edad' => 25,
                'saldo' => 800,
                'sexo' => "hombre",
                'cantidad_prestamo' => 20.000,
                'debe_factura' => "si"
            ],
            [
                'id'=> 2,
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
