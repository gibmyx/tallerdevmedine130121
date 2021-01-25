<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Medine\Daniel\Application\Update\LibroUpdater;
use Medine\Daniel\Application\Update\LibroUpdaterRequest;

class LibrosPostController extends Controller
{
    private $updater;

    public function __construct(LibroUpdater $updater)
    {
        $this->updater = $updater;
    }

    public function __invoke(string $id, Request $request)
    {
        $this->updater->__invoke(
            new LibroUpdaterRequest(
                    $id,
                    $request
                )
        );

        return new Response('', 200);
    }
}
