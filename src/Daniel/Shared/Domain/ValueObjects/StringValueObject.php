<?php

declare(strict_types=1);

namespace Medine\Daniel\Shared\Domain\ValueObjects;

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
