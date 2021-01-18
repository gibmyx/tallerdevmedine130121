<?php

namespace App\Http\Controllers;

use App\Mail\SendMailPropuesta;
use App\Propuesta;
use App\src\Propuesta\Application\UserCase\ActualizarPropuestaUsarCase;
use App\src\Propuesta\Application\UserCase\BorrarPropuestaUsarCase;
use App\src\Propuesta\Application\UserCase\GuardarPropuestaUserCase;
use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropuestaController extends Controller
{
    private $repository;

    public function __construct( PropuestaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save_propuesta(Request $request): JsonResponse
    {

        $error = '';
        $params = $request->input();

        try {
            (new GuardarPropuestaUserCase($params, $this->repository))->execute();
        } catch (\Exception $e){
            $error .= $e->getMessage();
        }
        $response = [
            'message' => strlen($error) ? $error : 'Propuesta guardado con exito.',
            'code' => strlen($error) ? 401 : 201,
        ];

        return response()->json($response, $response['code']);
    }

    public function get_propuestas(Request $request): JsonResponse
    {
        $response = Propuesta::all()->toArray();
        return response()->json($response);
    }

    public function delete_propuesta(Request $request): JsonResponse
    {
        $error = '';
        $params = $request->input();

        try {
            (new BorrarPropuestaUsarCase($params, $this->repository))->execute();
        } catch (\Exception $e){
            $error .= $e->getMessage();
        }
        $response = [
            'message' => strlen($error) ? $error : 'Propuesta borrada con exito.',
            'code' => strlen($error) ? 401 : 201,
        ];

        return response()->json($response, $response['code']);
    }

    public function update_propuesta(Request $request): JsonResponse
    {
        $error = '';
        $params = $request->input();

        try {
            (new ActualizarPropuestaUsarCase($params, $this->repository))->execute();
        } catch (\Exception $e){
            $error .= $e->getMessage();
        }
        $response = [
            'message' => strlen($error) ? $error : 'Propuesta actualizada con exito.',
            'code' => strlen($error) ? 401 : 201,
        ];

        return response()->json($response, $response['code']);
    }

    public function send_propuesta()
    {
        $error = '';

        try {

            Mail::to("gibmyxjobs@gmail.com")->send(new SendMailPropuesta());

        } catch (\Exception $e){

            $error .= $e->getMessage();

        }
        $response = [
            'message' => strlen($error) ? $error : 'Propuesta Enviada con exito.',
            'code' => strlen($error) ? 401 : 201,
        ];
        return response()->json($response, $response['code']);
    }
}
