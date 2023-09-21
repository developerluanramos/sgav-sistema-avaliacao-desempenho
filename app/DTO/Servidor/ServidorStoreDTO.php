<?php

namespace App\DTO\Servidor;

class ServidorStoreDTO
{
    public string $name;
    public string $email;
    public string $data_nascimento;
    public string $data_admissao;
    public string $cargo_uuid;
    public string $matricula;

    public function __construct(
        string $name,
        string $email,
        string $data_nascimento,
        string $data_admissao,
        string $cargo_uuid,
        string $matricula
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->data_nascimento = $data_nascimento;
        $this->data_admissao = $data_admissao;
        $this->cargo_uuid = $cargo_uuid;
        $this->matricula = $matricula;
    }
}
