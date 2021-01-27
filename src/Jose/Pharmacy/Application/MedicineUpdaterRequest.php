<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Application;

use Illuminate\Http\Request;

final class MedicineUpdaterRequest
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
