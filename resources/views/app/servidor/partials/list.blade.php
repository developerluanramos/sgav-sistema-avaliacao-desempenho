<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Email',
        'Data de Nascimento',
        'Data de Admissão',
        'Cargo',
        'Matrícula',
        'Ações'
    ]"
    :paginator="$servidores"
>
@section('table-content')
    @foreach($servidores as $servidor)
        <tr>
            <td>{{ $servidor->name }}</td>
            <td>{{ $servidor->email }}</td>
            <td>{{ $servidor->data_nascimento }}</td>
            <td>{{ $servidor->data_admissao }}</td>
            <td>{{ $servidor->cargo }}</td>
            <td>{{ $servidor->matricula }}</td>
            <td>
                <a href="{{ route('servidor.edit', $servidor->id) }}" class="text-blue-500 hover:underline">Editar</a>
                <form action="{{ route('servidor.destroy', $servidor->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
</x-layouts.tables.simple-table>
