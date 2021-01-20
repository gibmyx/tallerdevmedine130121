<?php

declare(strict_types=1);

namespace Tests\Feature\Cars;

use Ramsey\Uuid\Uuid;
use Tests\TestCase;

final class CarPostControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_new_car()
    {
        $response = $this->postJson('/api/cars', [
            'id' => Uuid::uuid4(),
            'name' => 'Enzo',
            'brand' => 'Ferrari',
            'model' => 'Sport'
        ]);

        $response->assertStatus(201);
    }
}
