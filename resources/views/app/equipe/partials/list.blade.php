<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Ações'
    ]"
    :paginator="$equipes"
    :appends="$filters"
>
    @section('table-content')
        @foreach($equipes->items() as $index => $equipe)
            <tr>
                <td>{{ $equipe->nome }}</td>
                <td><x-layouts.badges.situacao-equipe
                    :situacao="$equipe->situacao"
                    />
                </td>
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
                    :route="'#'"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
