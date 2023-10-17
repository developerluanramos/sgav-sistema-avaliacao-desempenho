<?php

namespace App\Repositories\Cargo;

use App\DTO\Cargo\CargoStoreDTO;

interface CargoRepositoryInterface
{
    public function all();

    public function find($uuid);

    public function new(CargoStoreDTO $dto): array;
}
