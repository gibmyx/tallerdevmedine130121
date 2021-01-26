<?php

declare(strict_types=1);

namespace Medine\Daniel\Domain\ValueObjects;

use Medine\Daniel\Domain\Exceptions\EmptyArgumentException;
use Medine\Daniel\Shared\Domain\ValueObjects\StringValueObject;

final class LibroEditorial extends StringValueObject
{
    public function __construct(string $text)
    {
        $this->notEmpty($text);

        parent::__construct($text);
    }

    private function notEmpty(string $text): void
    {
        if (empty($text))
            throw new EmptyArgumentException('El nombre de la casa editorial no puede estar vacío');
    }
}
