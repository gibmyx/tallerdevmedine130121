<?php

declare(strict_types=1);

namespace Tests\Feature\Daniel;

use App\Libro;
use Tests\TestCase;

final class LibrosTest extends TestCase
{
//    private $repository;
//
//    protected function setUp(LibrosRepository $repository)
//    {
//        $this->repository = $repository;
//    }

    /**
     * @test
     */
    public function it_should_create_a_book()
    {
        $response = $this->put('/guardar_libro', [
            'id' => '6',
            'nombre' => 'Ingles 1',
            'autor' => 'pepe',
            'edicion' => 'tercera',
            'editorial' => 'casa editorial',
            'fecha_publicacion' => '2021/01/20'
        ]);

        $response->assertStatus(201);
    }
}
