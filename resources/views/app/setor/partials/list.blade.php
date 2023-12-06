<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Posto de Trabalho',
    ]"
    :paginator="$setores"
    :appends="$filters"
>
    @section('table-content')
        @foreach($setores->items() as $index => $setor)
            <tr>
                <td>{{ $setor->nome }}</td>
                <td>{{ $setor->posto_trabalho['nome'] }}</td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.show', $setor->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('cargo.edit', $setor->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
