@extends('app.layouts.app')

{{--@section('breadcrumb')--}}
{{--    {{ Breadcrumbs::render('conceito-avaliacao.create') }}--}}
{{--@endsection--}}

@section('title', 'Novo Ciclo Avaliativo')

<x-layouts.headers.create-header :title="'Novo Ciclo Avaliativo'"/>

@section('content')
    @include('app.ciclo-avaliativo.partials.stepper', ['step' => \App\Enums\CicloAvaliativoStepsEnum::PERIODICIDADE])
{{--    @include('components.alerts.form-errors')--}}
    <form class="mt-6" method="POST" action="{{route('ciclo-avaliativo.periodicidade.store')}}">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-2">
            <x-layouts.inputs.input-datepicker
                label="Data de início do ciclo"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
        </div>
        <div class="flex flex-wrap -mx-3 mb-2 mt-6">
            <x-layouts.inputs.input-normal-number
                label="Quantidade de ciclos"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-select-enum
                label="Unidade do ciclo"
                name="unidade_ciclo"
                lenght="3/12"
                :data="$formData['unidadesPeriodicidade']"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-number
                label="Quantidade de períodos"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-select-enum
                label="Unidade do período"
                name="unidade_periodo"
                lenght="3/12"
                :data="$formData['unidadesPeriodicidade']"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
        </div>
        <div class="flex flex-wrap -mx-3 mb-2 mt-2 mt-6">
            <x-layouts.inputs.input-normal-number
                label="Abertura do ciclo"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-number
                label="Encerramento do ciclo"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-number
                label="Abertura do periodo"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
            <x-layouts.inputs.input-normal-number
                label="Encerramento do periodo"
                name="iniciado_em"
                lenght="3/12"
                :value="$peridodicidade->iniciado_em ?? old('iniciado_em')"
            />
        </div>
        <div class="flex items-end align-content-end align-items-end">
            <x-layouts.buttons.submit-button text="Prosseguir"/>
        </div>
    </form>
@endsection



