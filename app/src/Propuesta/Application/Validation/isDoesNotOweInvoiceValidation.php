<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\Validation;


use App\src\Propuesta\Application\Exceptions\isDoesNotOweInvoiceException;

final class isDoesNotOweInvoiceValidation extends PopuestaValidation
{

    function validate()
    {
        $params = $this->params;
        if($params['debe_factura'] === "si")
            Throw new isDoesNotOweInvoiceException("El cliente debe facturas");
    }
}
