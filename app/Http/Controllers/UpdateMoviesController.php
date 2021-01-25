<?php

declare(strict_types=1);


namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Medine\Gibmyx\Application\Commands\PeliculaCommand;

final class UpdateMoviesController extends Controller
{
    private $update;

    public function __construct(UpdatePeliculaUseCases $update)
    {
        $this->update = $update;
    }

    public function __invoke(Request $request)
    {
        $error = '';
        try {
            ($this->update)(new PeliculaCommand(
                $request->input('id', ''),
                $request->input('titulo', ''),
                $request->input('genero', ''),
                $request->input('duracion', ''),
                $request->input('director', ''),
                $request->input('estreno','')
            ));
        }catch (\Exception $e){
            $error = $e->getMessage();
        }
        $response = [
            "code" => strlen($error) ? JsonResponse::HTTP_UNAUTHORIZED : JsonResponse::HTTP_CREATED,
            "message" => strlen($error) ? $error : "Pelicula actualizada con exito"
        ];

        return response()->json($response, $response['code']);
    }
}
