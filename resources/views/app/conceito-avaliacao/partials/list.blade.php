<x-layouts.tables.simple-table
    :headers="[
        'Descrição',
        'Ações'
    ]"
    :paginator="$conceitosAvaliacao"
    :appends="$filters"
>
    @section('table-content')
        @foreach($conceitosAvaliacao->items() as $index => $conceitoAvaliacao)
            <tr>
                <td>{{ $conceitoAvaliacao->descricao }}</td>
                <td class="text-left">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.show', $conceitoAvaliacao->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('cargo.edit', $conceitoAvaliacao->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
