<?php

namespace App\Http\Controllers\App\Servidor;

use App\Actions\Servidor\ServidorCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Servidor\ServidorCreateRequest;
use App\Models\Cargo;

class ServidorCreateController extends Controller
{
    private $action;

    public function __construct(ServidorCreateAction $action)
    {
        $this->action = $action;
    }

    public function create()
    {
    $cargos = Cargo::all();
    return view('app.servidor.create', compact('cargos'));
    }

    public function store(ServidorCreateRequest $request)
    {
        $data = $request->validated();
        $this->action->execute($data);

        return redirect()->route('servidor.index')->with('success', 'Servidor público criado com sucesso.');
    }
}
