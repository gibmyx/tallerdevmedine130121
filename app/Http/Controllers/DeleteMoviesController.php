<?php

declare(strict_types=1);


namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Medine\Gibmyx\Application\Commands\PeliculaCommand;
use Medine\Gibmyx\Application\UseCases\DeletePeliculaUseCases;

final class DeleteMoviesController extends Controller
{
    private $update;

    public function __construct(DeletePeliculaUseCases $update)
    {
        $this->update = $update;
    }

    public function __invoke(Request $request)
    {
        $error = '';
        try {
            ($this->update)(new PeliculaCommand(
                $request->input('id', ''),
                '',
                '',
                '',
                '',
                ''
            ));
        }catch (\Exception $e){
            $error = $e->getMessage();
        }
        $response = [
            "code" => strlen($error) ? JsonResponse::HTTP_UNAUTHORIZED : JsonResponse::HTTP_OK,
            "message" => strlen($error) ? $error : "Pelicula eliminada con exito"
        ];

        return response()->json($response, $response['code']);
    }
}
