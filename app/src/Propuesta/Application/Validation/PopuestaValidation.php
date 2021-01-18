<?php

declare(strict_types=1);


namespace App\src\Propuesta\Application\Validation;


abstract class PopuestaValidation
{
    protected $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    abstract function validate();
}
