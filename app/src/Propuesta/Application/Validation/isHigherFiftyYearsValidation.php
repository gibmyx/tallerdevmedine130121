<?php

declare(strict_types=1);

namespace App\src\Propuesta\Application\Validation;

use App\src\Propuesta\Application\Exceptions\isHigherFiftyYearsException;

final class isHigherFiftyYearsValidation extends PopuestaValidation
{

    public function validate(): void
    {
        $params = $this->params;

        $edad = (int) isset($params['edad']) && $params['edad'] ? $params['edad'] : 0;

        if($edad > 50)
            Throw new isHigherFiftyYearsException("El cliente tiene mas de 50 años");
    }
}
