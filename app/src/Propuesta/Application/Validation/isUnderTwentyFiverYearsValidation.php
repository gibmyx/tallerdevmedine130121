<?php

declare(strict_types=1);

namespace App\src\Propuesta\Application\Validation;

use App\src\Propuesta\Application\Exceptions\isUnderTwentyFiverYearsException;

final class isUnderTwentyFiverYearsValidation extends PopuestaValidation
{

    public function validate(): void
    {
        $params = $this->params;

        $edad = (int) isset($params['edad']) && $params['edad'] ? $params['edad'] : 0;
        $sexo = isset($params['sexo']) && $params['sexo'] ? $params['sexo'] : '';

        if($edad < 25 && $sexo === "hombre")
            Throw new isUnderTwentyFiverYearsException("El cliente tiene menos de 25 años");
    }
}
