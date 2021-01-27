<?php
declare(strict_types=1);

namespace Tests\Feature\Jose\Pharmacy;

use App\Medicine;
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
            'price' => '2.000.000'
        ]);

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function it_should_update_an_existing_medicine()
    {
        $medicine = factory(Medicine::class)->create();
        $this->postJson("/save_medicine", $medicine->toArray());
        $response = $this->post("/update_medicine/{$medicine['id']}", [
            'name' => 'Acetaminophen',
            'miligrams' => '1000',
        ]);
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function it_should_delete_an_existing_medicine()
    {
        $medicine = factory(Medicine::class)->create();
        $response = $this->delete("/delete_medicine/{$medicine['id']}");
        $response->assertStatus(200);
    }
}
