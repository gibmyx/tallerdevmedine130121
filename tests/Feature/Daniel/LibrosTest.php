<?php

declare(strict_types=1);

namespace Tests\Feature\Daniel;

use Tests\TestCase;
use Ramsey\Uuid\Uuid;

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
        $uuid = Uuid::uuid4();
        $response = $this->put("/guardar_libro/{$uuid->toString()}", [
            'nombre' => 'Ingles 1',
            'autor' => 'pepe',
            'edicion' => 'tercera',
            'editorial' => 'casa editorial',
            'fecha_publicacion' => '20/01/2021'
        ]);

        $response->assertStatus(201);
    }
}