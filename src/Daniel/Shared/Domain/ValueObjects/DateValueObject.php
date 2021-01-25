<?php

declare(strict_types=1);

namespace Medine\Daniel\Shared\Domain\ValueObjects;

use Medine\Daniel\Shared\Domain\Exceptions\EmptyArgumentException;
use Medine\Daniel\Shared\Domain\Exceptions\InvalidDateException;

class DateValueObject
{
    private $date;

    public function __construct(string $date)
    {
        $this->date = $this->setDate($date);
    }

    public function date(): string
    {
        return $this->date;
    }

    public function setDate(string $date): string
    {
        $explodedDate = explode('/', $date);

        if (empty($date))
            throw new EmptyArgumentException('No puede estar vacio');

        if (!checkdate(
            (int)$explodedDate[1],
            (int)$explodedDate[0],
            (int)$explodedDate[2]
        ))
            throw new InvalidDateException('La fecha indicada no es válida');

        return $date;
    }
}
