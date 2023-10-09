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
                <td>{{ $servidor->data_nascimento }}</td>
                <td>{{ $servidor->data_admissao }}</td>
                <td>{{ $servidor->cargo['nome'] }}</td>
                <td>{{ $servidor->matricula }}</td>
                <td class="text-center">
                    <x-layouts.buttons.action-button
                        text="Editar"
                        action="editar"
                        color="primary"
                        :route="'#'"/>
                    <x-layouts.buttons.action-button
                        text="Excluir"
                        action="excluir"
                        color="danger"
                        :route="'#'"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
