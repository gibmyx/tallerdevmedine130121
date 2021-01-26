<?php

declare(strict_types=1);

namespace Medine\Daniel\Domain\ValueObjects;

use Medine\Daniel\Shared\Domain\Exceptions\EmptyArgumentException;
use Medine\Daniel\Shared\Domain\ValueObjects\StringValueObject;

final class LibroNombre extends StringValueObject
{
    public function __construct(string $text)
    {
        $this->notEmpty($text);

        parent::__construct($text);
    }

    private function notEmpty(string $text): void
    {
        if (empty($text))
            throw new EmptyArgumentException('El nombre del libro no puede estar vacío');
    }
}
