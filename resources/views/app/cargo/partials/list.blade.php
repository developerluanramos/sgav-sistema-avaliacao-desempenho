<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Ações'
    ]"
    :paginator="$cargos"
    :appends="$filters"
>
    @section('table-content')
        @foreach($cargos->items() as $index => $cargo)
            <tr>
                <td>{{ $cargo->nome }}</td>
                <td>{{ $cargo->situacao }}</td>
                <td class="text-center">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.create', $cargo->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('cargo.create', $cargo->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
