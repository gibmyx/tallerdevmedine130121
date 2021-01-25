<?php
declare(strict_types=1);

namespace Tests\Feature\Jose\Pharmacy;

use Ramsey\Uuid\Uuid;
use Tests\TestCase;

final class PharmacyPostControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_save_a_medicine()
    {
     $response =   $this->postJson("/save_medicine", [
            'id' => Uuid::uuid4(),
            'name' => 'Paracetamol',
            'brand' => 'Genven',
            'miligrams' => '3.5',
            'price' => '2.000.000'
        ]);

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function it_should_update_a_medicine()
    {
     $response =   $this->postJson("/update_medicine", [
            'id' => Uuid::uuid4(),
            'name' => 'Paracetamol',
            'brand' => 'Genven',
            'miligrams' => '3.5',
            'price' => '2.000.000'
        ]);

        $response->assertStatus(201);
    }
}
