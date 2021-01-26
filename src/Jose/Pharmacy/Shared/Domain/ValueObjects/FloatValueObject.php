<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Shared\Domain\ValueObjects;

class FloatValueObject
{
    private $float;

    public function __construct(float $float)
    {
        $this->float = $float;
    }

    public function float(): float
    {
        return $this->float;
    }
}
