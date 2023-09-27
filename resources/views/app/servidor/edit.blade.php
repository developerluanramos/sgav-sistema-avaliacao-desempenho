@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('servidor.edit', $servidor) }}
@endsection

@section('title', 'Edição de Servidor Público')

<x-layouts.headers.edit-header :title=" 'Editar: ' . $servidor->nome"/>

@section('content')

<h1 class="text-2xl font-semibold">Editar Servidor Público</h1>
    <form action="{{ route('servidor.store') }}" method="POST" class="mt-4">
        @csrf
        @include('app.servidor.partials.form')
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Salvar</button>
    </form>

@include('components.alerts.form-errors')

@endsection
