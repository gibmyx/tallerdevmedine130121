<?php

declare(strict_types=1);

namespace Tests\Feature\Daniel;

use App\Libro;
use Faker\Factory;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Medine\Daniel\Application\Create\LibroCreator;
use Medine\Daniel\Application\Create\LibroCreatorRequest;
use Medine\Daniel\Infrastructure\MySqlLibroRepository;
use Mockery\Mock;
use Tests\TestCase;
use Ramsey\Uuid\Uuid;
use function foo\func;

final class LibrosTest extends TestCase
{
    use DatabaseTransactions;

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
            'fecha_publicacion' => '2021-01-24'
        ]);

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function it_should_update_an_existing_book()
    {
        $libro = factory(Libro::class)->create();
        $response = $this->post("/update_libro/{$libro->uuid}", [
            'nombre' => 'Ingles 1',
            'edicion' => 'cuarta',
        ]);

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function it_should_delete_an_existing_book()
    {
        $libro = factory(Libro::class)->create();
        $response = $this->delete("/delete_libro/{$libro->uuid}");

        $response->assertStatus(200);
    }
}
