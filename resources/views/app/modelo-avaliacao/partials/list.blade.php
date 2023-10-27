<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Finalidade'
        'Ações'
    ]"
    :paginator="$modelosAvaliacao"
    :appends="$filters"
>
    @section('table-content')
        @foreach($modelosAvaliacao->items() as $index => $modeloAvaliacao)
            <tr>
                <td>{{ $modeloAvaliacao->nome }}</td>
                <td>{{ $modeloAvaliacao->situacao }}</td>
                <td>{{ $modeloAvaliacao->finalidade }}</td>
                <td class="text-center">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('modelo-avaliacao.show', $modeloAvaliacao->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('modelo-avaliacao.edit', $modeloAvaliacao->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
