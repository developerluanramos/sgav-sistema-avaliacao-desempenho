<?php

namespace App\Actions\Servidor;

use App\Repositories\Servidor\ServidorRepository;

class ServidorCreateAction
{
    private $repository;

    public function __construct(ServidorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(array $data)
    {
        return $this->repository->create($data);
    }
}
