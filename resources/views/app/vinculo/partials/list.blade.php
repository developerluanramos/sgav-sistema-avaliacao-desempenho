<x-layouts.tables.simple-table
    :headers="[
        'Email',
        'Data de Admissão',
        'Servidor',
        'Matrícula',
        'Ações'
    ]"
    :paginator="$vinculos"
    :appends="$filters"
>

@section('table-content')
    @foreach($vinculos->items() as $index => $vinculo)
        <tr>
            <td>{{ $vinculo->email }}</td>
            <td>{{ $vinculo->formatted_data_admissao }}</td>
            <td>{{ $vinculo->servidor['nome'] }}</td>
            <td>{{ $vinculo->matricula }}</td>
            <td class="text-right">
                <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="'#'"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('vinculo.edit', $vinculo->uuid)"/>
            </td>
        </tr>
    @endforeach
@endsection
</x-layouts.tables.simple-table>
