<?php

declare(strict_types=1);

namespace Tests\Feature\Daniel;

use App\Libros;
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
            'id' => '',
            'name' => 'Ingles 1',
            'autor' => 'pepe',
            'edicion' => 'tercera',
            'editorial' => 'casa editorial',
            'fecha_publicacion' => date('2021/01/20')
        ]);

        $response->assertStatus(201);
    }
}
