@extends('app.layouts.app')

{{--@section('breadcrumb')--}}
{{--    {{ Breadcrumbs::render('conceito-avaliacao') }}--}}
{{--@endsection--}}

@section('title', 'Ciclos Avaliativos')

@section('content')

    <x-layouts.headers.list-header :count="'0'" :title="'Ciclos Avaliativos'" :route="route('ciclo-avaliativo.create')"/>

    @include('components.alerts.form-success')

{{--    @include('app.conceito-avaliacao.partials.filters', [--}}
{{--        "conceitoAvaliacao" => $conceitoAvaliacao,--}}
{{--        "filters" => $filters--}}
{{--    ])--}}


{{--    @include('app.conceito-avaliacao.partials.list', [--}}
{{--        "conceitoAvaliacao" => $conceitoAvaliacao,--}}
{{--        "filters" => $filters--}}
{{--    ])--}}

@endsection
