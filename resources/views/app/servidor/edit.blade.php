@extends('app.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold">Editar Servidor Público</h1>
    <form action="{{ route('servidores-publicos.update', $servidor->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nome" class="block text-gray-600">Nome:</label>
            <input type="text" name="nome" value="{{ $servidor->nome }}" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600">Email:</label>
            <input type="email" name="email" value="{{ $servidor->email }}" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="data_nascimento" class="block text-gray-600">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" value="{{ $servidor->data_nascimento }}" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="data_admissao" class="block text-gray-600">Data de Admissão:</label>
            <input type="date" name="data_admissao" value="{{ $servidor->data_admissao }}" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="cargo_uuid" class="block text-gray-600">Cargo:</label>
            <select name="cargo_uuid" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">Selecione um cargo</option>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->uuid }}" {{ $servidor->cargo_uuid == $cargo->uuid ? 'selected' : '' }}>{{ $cargo->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="matricula" class="block text-gray-600">Matrícula:</label>
            <input type="text" name="matricula" value="{{ $servidor->matricula }}" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Atualizar</button>
    </form>
@endsection
