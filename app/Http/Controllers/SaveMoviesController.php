<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Medine\Gibmyx\Application\Commands\PeliculaCommand;
use Medine\Gibmyx\Application\UseCases\CrearPeliculaUseCases;
use \Illuminate\Http\JsonResponse;

class SaveMoviesController extends Controller
{
    private $creator;

    public function __construct(CrearPeliculaUseCases $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request): JsonResponse
    {
        $error = '';
        try {
            ($this->creator)(new PeliculaCommand(
                    $request->input('id'),
                    $request->input('titulo'),
                    $request->input('genero'),
                    $request->input('duracion'),
                    $request->input('director'),
                    $request->input('estreno')
            ));
        }catch (\Exception $e){
            $error = $e->getMessage();
        }
        $response = [
            "code" => strlen($error) ? JsonResponse::HTTP_UNAUTHORIZED : JsonResponse::HTTP_CREATED,
            "message" => strlen($error) ? $error : "Pelicula creada con exito"
        ];

        return response()->json($response, $response['code']);
    }

}
