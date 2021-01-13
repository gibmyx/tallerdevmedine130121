<?php
declare(strict_types=1);

namespace App\src\Propuesta\Application;


use App\src\Propuesta\Domain\Propuesta;
use Illuminate\Http\Request;

final class SaveProposal
{
    private $request;

    private function __construct(Request $request)
    {
        $this->request = $request;
    }

    public static function create(Request $request): self
    {
        return new self ($request);
    }

    public function saveProposal(): void
    {
        $params = $this->request->input();
        $params['param']['sexo'] = 'Masculino';
        $propuesta = Propuesta::create($params['param']);
    }
}
