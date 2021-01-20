<?php

declare(strict_types=1);

namespace Tests\Feature\Daniel;

use App\Libros;
use Tests\TestCase;

final class LibrosTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldCreateABook()
    {
        $book = factory(Libros::class)->make()->toArray();
        $this->post('/guardar_libro', $book);
    }
}
