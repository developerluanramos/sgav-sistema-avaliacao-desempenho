<?php

namespace App\Repositories\CicloAvaliativo;

use App\Models\CicloAvaliativo;

interface CicloAvaliativoRepositoryInterface
{
    public function all();

    public function totalQuantity() : int;

    public function find(string $uuid): CicloAvaliativo;

    public function new(array $data): CicloAvaliativo;

    public function update(string $uuid, array $data): CicloAvaliativo;
}
