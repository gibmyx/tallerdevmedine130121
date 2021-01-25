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
            'miligrams' => '500',
            'price' => '2000000'
        ]);

        $response->assertStatus(201);
    }
}
