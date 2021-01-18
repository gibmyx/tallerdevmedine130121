<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\Validation;


use App\src\Propuesta\Application\Exceptions\isLoanWithinRangeException;

final class isLoanWithinRange extends PopuestaValidation
{

    function validate()
    {
        $params = $this->params;

        if($params['cantidad_prestamo'] < 20000 || $params['cantidad_prestamo'] > 50000)
            Throw new isLoanWithinRangeException("El prestamo esta fuera del rango");
    }
}
