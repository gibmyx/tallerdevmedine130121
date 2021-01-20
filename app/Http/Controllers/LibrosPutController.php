<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Medine\Daniel\Application\Create\LibroCreator;
use Medine\Daniel\Application\Create\LibroCreatorRequest;

class LibrosPutController extends Controller
{
    private $creator;

    public function __construct(LibroCreator $creator)
    {
        $this->creator = $creator;
    }

    public function create(Request $request)
    {
        $this->creator->__invoke(
            new LibroCreatorRequest(
                    $request->input('id'),
                    $request->input('nombre'),
                    $request->input('autor'),
                    $request->input('edicion'),
                    $request->input('editorial'),
                    $request->input('fecha_publicacion')
                )
        );

        return new Response('', 201);
    }
}
