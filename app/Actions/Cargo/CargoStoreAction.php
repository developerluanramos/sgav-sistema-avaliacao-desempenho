<?php

namespace App\Actions\Cargo;

use App\DTO\Cargo\CargoStoreDTO;
use App\Repositories\Cargo\CargoRepositoryInterface;

class CargoStoreAction {
    
    
    public function __construct(
        protected CargoRepositoryInterface $repository
    ) { }

    public function new(CargoStoreDTO $dto): array
    {
        return $this->repository->new($dto);
    }
}