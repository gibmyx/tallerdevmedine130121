<?php
declare(strict_types=1);

namespace Medine\Jose\Pharmacy\Domain;

use App\Medicine as MedicineModel;
use Medine\Jose\Pharmacy\Domain\ValueObjects\MedicineId;



final class InMemoryMedicineRepository implements MedicineRepository
{
    private $model;

    public function __construct(MedicineModel $model)
    {
        $this->model = $model;
    }

    public function save(Medicine $medicine): void
    {
       $this->model->create([
           'id' => $medicine->id()->uuid(),
           'name' => $medicine->name()->text(),
           'brand' => $medicine->brand()->text(),
           'miligrams' => $medicine->miligrams()->float(),
           'price' => $medicine->price()->float(),
       ]);
    }
    public function update(MedicineId $id, array $params)
    {
        // TODO: Implement update() method.
    }

    public function delete(MedicineId $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(MedicineId $id)
    {
        // TODO: Implement delete() method.
    }
}
