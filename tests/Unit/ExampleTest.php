<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testIsCreatePropuesta()
    {
        $this->post("/save_propuesta", [
            "nombre" => "José",
            "apellido" => "Quilarque",
            "cantidad_prestamo" => 20000,
            "debe_factura" => "no",
            "edad" => "25",
            "saldo" => 600,
            "sexo" => 'hombre'
        ]);

        $this->assertDatabaseHas('propuestas',[
            "nombre" => 'José',
            "apellido" => 'Quilarque',
            "cantidad_prestamo" => 20000,
            "debe_factura" => 'no',
            "edad" => 25,
            "saldo" => 600,
            "sexo" => 'hombre'
        ]);
    }
}
