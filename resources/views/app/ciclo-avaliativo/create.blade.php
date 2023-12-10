@extends('app.layouts.app')

{{--@section('breadcrumb')--}}
{{--    {{ Breadcrumbs::render('conceito-avaliacao.create') }}--}}
{{--@endsection--}}

@section('title', 'Novo Ciclo Avaliativo')

<x-layouts.headers.create-header :title="'Novo Ciclo Avaliativo'"/>

@section('content')
    @include('app.ciclo-avaliativo.partials.stepper', ['step' => $step])

    @if($step === \App\Enums\CicloAvaliativoStepsEnum::PERIODICIDADE)
        @include('app.ciclo-avaliativo.periodicidade.create')
    @endif

    @if($step === \App\Enums\CicloAvaliativoStepsEnum::INCIDENCIA)
        @include('app.ciclo-avaliativo.incidencia.create')
    @endif

    @if($step === \App\Enums\CicloAvaliativoStepsEnum::TEMPLATE)
        {{ 'template form' }}
    @endif

    @if($step === \App\Enums\CicloAvaliativoStepsEnum::DEPENDENCIA)
        {{ 'dependencia form' }}
    @endif
@endsection
