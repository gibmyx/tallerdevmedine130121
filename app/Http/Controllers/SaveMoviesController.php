<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Medine\Gibmyx\Domain\Repository\PeliculasRepository;

class SaveMoviesController extends Controller
{
    private $repository;

    public function __construct(PeliculasRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        return response()->json([], 201);
    }

}
