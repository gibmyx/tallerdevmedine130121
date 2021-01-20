<?php

declare(strict_types=1);

namespace App\src\Propuesta\Application\UserCase;

use App\src\Propuesta\Application\Validation\isDoesNotOweInvoiceValidation;
use App\src\Propuesta\Application\Validation\isHigherFiftyYearsValidation;
use App\src\Propuesta\Application\Validation\isLoanWithinRange;
use App\src\Propuesta\Application\Validation\isSalaryMinimunValidation;
use App\src\Propuesta\Application\Validation\isUnderTwentyFiverYearsValidation;
use App\src\Propuesta\Application\Validation\isUnderTwentyYearsValidation;
use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use Illuminate\Support\Facades\DB;

final class GuardarPropuestaUserCase
{
    private $params;
    private $repository;

    public function __construct(array $params, PropuestaRepository $repository)
    {
        $this->params = $params;
        $this->repository = $repository;
    }

    public function execute(): void
    {
        DB::transaction(function () {
            $params = $this->params;
            $this->validation($params);
            $this->repository->save($params);
        });
    }

    private function validation(array $params): void
    {
        (new isHigherFiftyYearsValidation($params))->validate();
        (new isUnderTwentyFiverYearsValidation($params))->validate();
        (new isUnderTwentyYearsValidation($params))->validate();
        (new isDoesNotOweInvoiceValidation($params))->validate();
        (new isLoanWithinRange($params))->validate();
        (new isSalaryMinimunValidation($params))->validate();
    }
}
