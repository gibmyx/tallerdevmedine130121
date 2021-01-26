<?php

declare(strict_types=1);

namespace Medine\Daniel\Domain\ValueObjects;

use Carbon\Carbon;
use Medine\Daniel\Shared\Domain\Exceptions\InvalidDateException;
use Medine\Daniel\Shared\Domain\ValueObjects\DateValueObject;

final class LibroFechaPublicacion extends DateValueObject
{
    public function __construct(string $date)
    {
        $this->isBeforeToday($date);

        parent::__construct($date);
    }

    private function isBeforeToday(string $date): void
    {
        if (
            $date >= Carbon::today()->format('d/m/Y')
        )
            throw new InvalidDateException('La fecha no puede ser superior al día de hoy.');
    }
}
