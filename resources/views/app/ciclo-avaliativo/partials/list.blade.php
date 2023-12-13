<x-layouts.tables.simple-table
    :headers="[
        'Código Controle',
        'Iniciado em',
        'Última atualização',
        'Fase',
        'Status',
        'Ações'
    ]"
    :paginator="$ciclosAvaliativos"
    :appends="[]"
>
    @section('table-content')
        @foreach($ciclosAvaliativos->items() as $index => $ciclo)
            <tr>
                <td>{{$ciclo->uuid}}</td>
                <td>{{$ciclo->periodicidade['iniciado_em']}}</td>
                <td>{{$ciclo->updated_at}}</td>
                <td><x-layouts.badges.step-ciclo-avaliativo :step="$ciclo->step" /></td>
                <td><x-layouts.badges.status-ciclo-avaliativo :status="$ciclo->status"/></td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                        text="Ver"
                        action="ver"
                        color="secondary"
                        :route="''"
                    />
                    @if($ciclo->step == \App\Enums\CicloAvaliativoStepsEnum::PERIODICIDADE)
                        <x-layouts.buttons.action-button
                            text="Editar"
                            action="editar"
                            color="primary"
                            :route="route('ciclo-avaliativo.periodicidade.create')"
                        />
                    @endif
                    @if($ciclo->step == \App\Enums\CicloAvaliativoStepsEnum::INCIDENCIA)
                        <x-layouts.buttons.action-button
                            text="Editar"
                            action="editar"
                            color="primary"
                            :route="route('ciclo-avaliativo.incidencia.create')"
                        />
                    @endif
                    @if($ciclo->step == \App\Enums\CicloAvaliativoStepsEnum::TEMPLATE)
                        <x-layouts.buttons.action-button
                            text="Editar"
                            action="editar"
                            color="primary"
                            :route="route('ciclo-avaliativo.template.create')"
                        />
                    @endif
                    @if($ciclo->step == \App\Enums\CicloAvaliativoStepsEnum::DEPENDENCIA)
                        <x-layouts.buttons.action-button
                            text="Editar"
                            action="editar"
                            color="primary"
                            :route="''"
                        />
                    @endif
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
