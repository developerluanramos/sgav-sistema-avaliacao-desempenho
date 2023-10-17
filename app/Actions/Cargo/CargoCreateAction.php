<?php

namespace App\Actions\Cargo;

use App\DTO\Cargo\CargoStoreDTO;
use App\Enums\CargoEnum;
use App\Models\Cargo;
use App\Repositories\Cargo\CargoEloquentRepository;
use App\Repositories\Cargo\CargoRepositoryInterface;

class CargoCreateAction
{
    public function __construct(
        protected CargoRepositoryInterface $repository
    ) { }
    
    public function exec(CargoStoreDTO $dto): array
    { 
        return $this->repository->new($dto);
    }
}


