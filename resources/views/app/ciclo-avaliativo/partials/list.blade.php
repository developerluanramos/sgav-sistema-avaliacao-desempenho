<x-layouts.tables.simple-table
    :headers="[
        'Código Controle',
        'Criado em',
        'Última atualização',
        'Status',
        'Ações'
    ]"
    :paginator="$ciclosAvaliativos"
    :appends="[]"
>
    @section('table-content')
        @foreach($ciclosAvaliativos->items() as $index => $cargo)
            <tr>
                <td>{{$cargo->uuid}}</td>
                <td>{{$cargo->created_at}}}</td>
                <td>{{$cargo->updated_at}}</td>
                <td>
                    <x-layouts.badges.status-ciclo-avaliativo
                        :status="$cargo->status"
                    />
                </td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                        text="Ver"
                        action="ver"
                        color="secondary"
                        :route="''"/>
                    <x-layouts.buttons.action-button
                        text="Editar"
                        action="editar"
                        color="primary"
                        :route="''"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
