<?php

declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Shared\Domain\ValueObjects;

class StringValueObject
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function text(): string
    {
        return $this->text;
    }

}
