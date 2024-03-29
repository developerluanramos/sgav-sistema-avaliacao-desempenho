<?php

namespace App\Repositories\CicloAvaliativo;

use App\Models\CicloAvaliativo;
use App\Repositories\Interfaces\PaginationInterface;


interface CicloAvaliativoRepositoryInterface
{
    public function all();

    public function totalQuantity() : int;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function find(string $uuid): CicloAvaliativo;

    public function new(array $data): CicloAvaliativo;

    public function update(string $uuid, array $data): CicloAvaliativo;

    public function show(string $uuid): CicloAvaliativo;
}
