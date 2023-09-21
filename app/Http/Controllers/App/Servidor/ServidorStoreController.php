<?php

namespace App\Http\Controllers\App\Servidor;

use App\Actions\Servidor\ServidorStoreAction;
use App\DTO\Servidor\ServidorStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Servidor\ServidorStoreRequest;

class ServidorStoreController extends Controller
{
    private $action;

    public function __construct(ServidorStoreAction $action)
    {
        $this->action = $action;
    }

    public function store(ServidorStoreRequest $request)
    {
        $data = new ServidorStoreDTO(
            $request->input('name'),
            $request->input('email'),
            $request->input('data_nascimento'),
            $request->input('data_admissao'),
            $request->input('cargo_uuid'),
            $request->input('matricula')
        );

        $this->action->execute($data);

        return redirect()->route('servidor.index')->with('success', 'Servidor público criado com sucesso.');
    }
}
