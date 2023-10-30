<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Finalidade',
        'Ações'
    ]"
    :paginator="$modeloAvaliacao"
    :appends="$filters"
>
    @section('table-content')
        @foreach($modeloAvaliacao->items() as $index => $modeloAvaliacao)
            <tr>
                <td>{{ $modeloAvaliacao->nome }}</td>
                <td>{{ $modeloAvaliacao->situacao }}</td>
                <td>{{ $modeloAvaliacao->finalidade }}</td>
                <td class="text-left">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.show', $modeloAvaliacao->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('cargo.edit', $modeloAvaliacao->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
