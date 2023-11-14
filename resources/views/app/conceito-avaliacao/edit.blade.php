@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.edit', $cargo) }}
@endsection --}}

@section('title', 'Edição Conceito de Avaliação')

<x-layouts.headers.edit-header :title="$conceitoAvaliacao->uuid.' - '.$conceitoAvaliacao->descricao"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{route('cargo.update', $conceitoAvaliacao->uuid)}}" method="POST">
    @method('PUT')
    @include('app.conceito-avaliacao.partials.form', ["conceitoAvaliacao" => $conceitoAvaliacao])
</form>

@endsection
