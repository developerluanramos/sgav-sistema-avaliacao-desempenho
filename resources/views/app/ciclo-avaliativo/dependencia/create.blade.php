@extends('app.layouts.app')

{{--@section('breadcrumb')--}}
{{--    {{ Breadcrumbs::render('conceito-avaliacao.create') }}--}}
{{--@endsection--}}

@section('title', 'Novo Ciclo Avaliativo')

<x-layouts.headers.create-header :title="'Novo Ciclo Avaliativo'"/>

@section('content')
    @include('app.ciclo-avaliativo.partials.stepper', ['step' => \App\Enums\CicloAvaliativoStepsEnum::DEPENDENCIA])
    <form method="POST" action="{{route('ciclo-avaliativo.dependencia.store')}}">
        @csrf
        <x-layouts.buttons.submit-button text="Salvar"/>
    </form>
@endsection
