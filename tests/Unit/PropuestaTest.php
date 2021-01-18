<?php

namespace Tests\Unit;

use App\Propuesta;
use App\src\Propuesta\Application\UserCase\GuardarPropuestaUserCase;
use App\src\Propuesta\Application\Exceptions\isSalaryMinimunException;
use App\src\Propuesta\Application\Exceptions\isLoanWithinRangeException;
use App\src\Propuesta\Application\Exceptions\isUnderTwentyYearsExecption;
use App\src\Propuesta\Application\Exceptions\isHigherFiftyYearsException;
use App\src\Propuesta\Application\Exceptions\isDoesNotOweInvoiceException;
use App\src\Propuesta\Application\Exceptions\isUnderTwentyFiverYearsException;
use App\src\Propuesta\Infrastructure\EloquentRepository\PropuestaEloquentRepository;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropuestaTest extends TestCase
{
    use RefreshDatabase;

    protected static $propuesta;

    public function testIsCreatePropuesta()
    {
        $propuesta = factory(Propuesta::class)->make()->toArray();
        $this->post("/save_propuesta", $propuesta);
        $this->assertDatabaseHas('propuestas', $propuesta);
    }

    public function testIsDeletePropuesta()
    {
        $propuesta_id = factory(Propuesta::class)->create()->id;
        $this->post("/delete_propuesta", ['id' => $propuesta_id]);
        $this->assertDatabaseMissing('propuestas', ['id' => $propuesta_id]);
    }

    public function testIsUpdatePropuestaDenegado()
    {
        $propuesta = factory(Propuesta::class)->create();
        $params = [
            'id' => $propuesta->id,
            'estado' => 'denegado'
        ];
        $this->post("/update_propuesta", $params);
        $this->assertDatabaseHas('propuestas', $params);
    }


    public function testIsUpdatePropuestaAceptado()
    {
        $propuesta = factory(Propuesta::class)->create();
        $params = [
            'id' => $propuesta->id,
            'estado' => 'aceptado'
        ];
        $this->post("/update_propuesta", $params);
        $this->assertDatabaseHas('propuestas', $params);
    }

    public function testListadoPropuestas()
    {
        $propuesta = factory(Propuesta::class, 5)->create()->toArray();
        $this->get("/get_propuestas")
            ->assertStatus(200)
            ->assertJson($propuesta);
    }

    /**
     * @expectedException isHigherFiftyYearsException
     */
    public function testIsHigherFiftyYearsException()
    {
        $this->expectException(isHigherFiftyYearsException::class);
        $this->expectExceptionMessage("El cliente tiene mas de 50 años");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['edad'] = 51;
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

    /**
     * @expectedException isUnderTwentyFiverYearsException
     */
    public function testIsUnderTwentyFiverYearsException()
    {
        $this->expectException(isUnderTwentyFiverYearsException::class);
        $this->expectExceptionMessage("El cliente tiene menos de 25 años");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['edad'] = 24;
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

    /**
     * @expectedException isUnderTwentyYearsExecption
     */
    public function testIsUnderTwentyYearsException()
    {
        $this->expectException(isUnderTwentyYearsExecption::class);
        $this->expectExceptionMessage("El cliente tiene menos de 20 años");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['edad'] = 19;
        $propuesta['sexo'] = 'mujer';
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

    /**
     * @expectedException isDoesNotOweInvoiceException
     */
    public function testIsDoesNotOweInvoiceException()
    {
        $this->expectException(isDoesNotOweInvoiceException::class);
        $this->expectExceptionMessage("El cliente debe facturas");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['debe_factura'] = "si";
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

    /**
     * @expectedException isLoanWithinRangeException
     */
    public function testIsLoanWithinRangeException()
    {
        $this->expectException(isLoanWithinRangeException::class);
        $this->expectExceptionMessage("El prestamo esta fuera del rango");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['cantidad_prestamo'] = 60000;
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

    /**
     * @expectedException isSalaryMinimunException
     */
    public function testIsSalaryMinimunException()
    {
        $this->expectException(isSalaryMinimunException::class);
        $this->expectExceptionMessage("El sueldo es menor al requerido");

        $propuesta = factory(Propuesta::class)->make()->toArray();
        $propuesta['saldo'] = 400;
        (new GuardarPropuestaUserCase($propuesta, new PropuestaEloquentRepository(new Propuesta())))->execute();
    }

}
