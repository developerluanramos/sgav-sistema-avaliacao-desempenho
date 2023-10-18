<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'E-mail',
        'Situação',
        'Opções'
    ]"
    :paginator="$user"
    :appends="$filters"
>
@section('table-content')
    @foreach($user->items() as $index => $users)
        <tr>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->situacao == 1 ? 'ATIVO' : 'INATIVO' }}</td>
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
