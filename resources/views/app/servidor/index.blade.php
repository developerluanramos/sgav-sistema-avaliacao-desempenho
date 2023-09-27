@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('servidor.index') }}
@endsection

@section('title', 'Lista de Servidores Públicos')

@section('content')
    <h1 class="text-2xl font-semibold">Lista de Servidores Públicos</h1>

    @include('components.alerts.form-success')

    @include('app.servidor.partials.filters', [
        "servidores" => $servidores,
        "filters" => $filters
    ])

    @include('app.servidor.partials.list', [
        "servidores" => $servidores
    ])

    <a href="{{ route('servidor.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Adicionar Servidor</a>
@endsection
