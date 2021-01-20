<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\Validation;


use App\src\Propuesta\Application\Exceptions\isSalaryMinimunException;

final class isSalaryMinimunValidation extends PopuestaValidation
{

    function validate()
    {
        $params = $this->params;
        if($params['saldo'] < 500)
            Throw new isSalaryMinimunException("El sueldo es menor al requerido");
    }
}
