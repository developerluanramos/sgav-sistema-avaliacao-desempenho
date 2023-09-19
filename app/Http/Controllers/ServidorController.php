<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Servidor;
use Illuminate\Http\Request;

class ServidorController extends Controller
{
    public function index()
    {
        $servidores = Servidor::all();
        return view('app.servidor.index', compact('servidores'));
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('app.servidor.create', compact('cargos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:servidores',
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|unique:servidores',
        ]);

        Servidor::create($validatedData);

        return redirect()->route('servidor.index')->with('success', 'Servidor público criado com sucesso.');
    }

    public function edit($id)
    {
        $servidor = Servidor::findOrFail($id);
        $cargos = Cargo::all();
        return view('servidores.edit', compact('servidor', 'cargos'));
    }

    public function update(Request $request, $id)
    {
        $servidor = Servidor::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:servidores,email,' . $servidor->id,
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|unique:servidores,matricula,' . $servidor->id,
        ]);

        $servidor->update($validatedData);

        return redirect()->route('servidor.index')->with('success', 'Servidor público atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $servidor = Servidor::findOrFail($id);
        $servidor->delete();

        return redirect()->route('servidor.index')->with('success', 'Servidor público excluído com sucesso.');
    }
}
