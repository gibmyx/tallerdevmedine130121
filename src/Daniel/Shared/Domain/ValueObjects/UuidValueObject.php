<?php

declare(strict_types=1);

namespace Medine\Daniel\Shared\Domain\ValueObjects;

use Ramsey\Uuid\Uuid as RamseyUuid;

class UuidValueObject
{
    private $uuid;

    public function __construct(string $uuid)
    {
        $this->ensureIsValidUuid($uuid);

        $this->uuid = $uuid;
    }

    public function uuid(): string
    {
        return $this->uuid;
    }

    private function ensureIsValidUuid(string $uuid): void
    {
        if(!RamseyUuid::isValid($uuid)){
            throw new \Exception(sprintf("<%s> does not allow the value <%s>", static::class, $uuid));
        }
    }


}
