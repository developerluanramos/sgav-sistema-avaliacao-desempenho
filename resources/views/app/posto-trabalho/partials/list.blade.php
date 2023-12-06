<x-layouts.tables.simple-table
    :headers="[
        'Nome',
    ]"
    :paginator="$postosTrabalho"
    :appends="$filters"
>
    @section('table-content')
        @foreach($postosTrabalho->items() as $index => $postoTrabalho)
            <tr>
                <td>{{ $postoTrabalho->nome }}</td>
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
                        :route="'#'"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
