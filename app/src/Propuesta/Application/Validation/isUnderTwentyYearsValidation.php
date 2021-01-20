<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\Validation;


use App\src\Propuesta\Application\Exceptions\isUnderTwentyYearsExecption;

final class isUnderTwentyYearsValidation extends PopuestaValidation
{

    public function validate(): void
    {
        $params = $this->params;

        $edad = (int) isset($params['edad']) && $params['edad'] ? $params['edad'] : 0;
        $sexo = isset($params['sexo']) && $params['sexo'] ? $params['sexo'] : '';

        if($edad < 20 && $sexo === "mujer")
            Throw new isUnderTwentyYearsExecption("El cliente tiene menos de 20 años");
    }
}
