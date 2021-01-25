<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Medine\Daniel\Application\Create\LibroCreator;
use Medine\Daniel\Application\Create\LibroCreatorRequest;
use Medine\Daniel\Application\Remove\LibroRemover;

class LibrosDeleteController extends Controller
{
    private $remover;

    public function __construct(LibroRemover $remover)
    {
        $this->remover = $remover;
    }

    public function __invoke(string $id)
    {
        $this->remover->__invoke(
            $id
        );

        return new Response('', 200);
    }
}
