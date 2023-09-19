<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\ServidorPublico;
use Illuminate\Http\Request;

class ServidorPublicoController extends Controller
{
    public function index()
    {
        $servidores = ServidorPublico::all();
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
            'email' => 'required|email|unique:servidores_publicos',
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|unique:servidores_publicos',
        ]);

        ServidorPublico::create($validatedData);

        return redirect()->route('servidores-publicos.index')->with('success', 'Servidor público criado com sucesso.');
    }

    public function edit($id)
    {
        $servidor = ServidorPublico::findOrFail($id);
        $cargos = Cargo::all();
        return view('servidores.edit', compact('servidor', 'cargos'));
    }

    public function update(Request $request, $id)
    {
        $servidor = ServidorPublico::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:servidores_publicos,email,' . $servidor->id,
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|unique:servidores_publicos,matricula,' . $servidor->id,
        ]);

        $servidor->update($validatedData);

        return redirect()->route('servidores-publicos.index')->with('success', 'Servidor público atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $servidor = ServidorPublico::findOrFail($id);
        $servidor->delete();

        return redirect()->route('servidores-publicos.index')->with('success', 'Servidor público excluído com sucesso.');
    }
}
