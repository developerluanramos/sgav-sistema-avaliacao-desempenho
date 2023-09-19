@extends('app.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold">Lista de Servidores Públicos</h1>
    <table class="min-w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Data de Nascimento</th>
                <th class="px-4 py-2">Data de Admissão</th>
                <th class="px-4 py-2">Cargo</th>
                <th class="px-4 py-2">Matrícula</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servidores as $servidor)
                <tr>
                    <td class="px-4 py-2">{{ $servidor->nome }}</td>
                    <td class="px-4 py-2">{{ $servidor->email }}</td>
                    <td class="px-4 py-2">{{ $servidor->data_nascimento }}</td>
                    <td class="px-4 py-2">{{ $servidor->data_admissao }}</td>
                    <td class="px-4 py-2">{{ $servidor->cargo }}</td>
                    <td class="px-4 py-2">{{ $servidor->matricula }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('servidores-publicos.edit', $servidor->id) }}" class="text-blue-500 hover:underline">Editar</a>
                        <form action="{{ route('servidores-publicos.destroy', $servidor->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('servidores-publicos.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Adicionar Servidor</a>
@endsection
