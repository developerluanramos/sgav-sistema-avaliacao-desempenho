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
    :appends="$filters"
>
    @section('table-content')
        @foreach($servidores->items() as $index => $servidor)
            <tr>
                <td>{{ $servidor->nome }}</td>
                <td>{{ $servidor->email }}</td>
                <td>{{ \Carbon\Carbon::parse($servidor->data_nascimento)->format('d-m-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($servidor->data_admissao)->format('d-m-Y') }}</td>
                <td>{{ $servidor->cargo['nome'] }}</td>
                <td>{{ $servidor->matricula }}</td>
                <td class="text-center">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="'#'"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('servidor.edit', ['servidor' => $servidor->uuid])"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
