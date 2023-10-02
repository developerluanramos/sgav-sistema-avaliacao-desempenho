<?php

namespace App\Repositories\Cargo;

interface CargoRepositoryInterface
{
    public function all();

    public function find($uuid);
}
