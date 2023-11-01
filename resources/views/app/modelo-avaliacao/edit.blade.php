@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.edit', $cargo) }}
@endsection --}}

@section('title', 'Edição Modelo de Avaliação')

<x-layouts.headers.edit-header :title="$modeloAvaliacao->uuid.' - '.$modeloAvaliacao->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form  method="POST">
    @method('PUT')
    @include('app.modelo-avaliacao.partials.form', ["modeloAvaliacao" => $modeloAvaliacao])
</form>

@endsection

{{-- action="{{route('cargo.update', $cargo->uuid)}}" --}}