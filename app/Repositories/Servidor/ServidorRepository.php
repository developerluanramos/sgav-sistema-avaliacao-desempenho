<?php

namespace App\Repositories\Servidor;

use App\Models\Servidor;

class ServidorRepository
{
    public function create(array $data)
    {
        return Servidor::create($data);
    }
}
