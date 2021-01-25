<?php

declare(strict_types=1);

namespace Medine\Daniel\Application\Update;

use Illuminate\Http\Request;

final class LibroUpdaterRequest
{
    private $id;
    private $request;

    public function __construct(
        string $id,
        Request $request
    )
    {
        $this->id = $id;
        $this->request = $request;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function toString(): array
    {
        $data = $this->request->all();

        return array_filter($data);
    }

}
