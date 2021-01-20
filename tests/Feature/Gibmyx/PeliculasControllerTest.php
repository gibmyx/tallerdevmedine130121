<?php

declare(strict_types=1);

namespace Tests\Feature\Gibmyx;

use Tests\TestCase;

final class PeliculasControllerTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_create_movie()
    {
        $response = $this->postJson('/save_movie');

        $response->assertStatus(201);
    }

}
