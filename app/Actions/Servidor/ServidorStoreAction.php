<?php

namespace App\Actions\Servidor;

use App\DTO\Servidor\ServidorStoreDTO;
use App\Repositories\Servidor\ServidorRepository;

class ServidorStoreAction
{
    private $repository;

    public function __construct(ServidorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(ServidorStoreDTO $data)
    {
        return $this->repository->create([
            'name' => $data->name,
            'email' => $data->email,
            'data_nascimento' => $data->data_nascimento,
            'data_admissao' => $data->data_admissao,
            'cargo_uuid' => $data->cargo_uuid,
            'matricula' => $data->matricula,
        ]);
    }
}
