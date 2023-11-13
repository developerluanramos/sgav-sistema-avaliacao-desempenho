@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo') }}
@endsection --}}

@section('title', 'Conceitos De Avaliação')

@section('content')

<x-layouts.headers.list-header :count="$conceitoAvaliacao->total()" :title="'Conceitos De Avaliacao'" :route="'conceito-avaliacao/create'"/>

@include('components.alerts.form-success')

@include('app.conceito-avaliacao.partials.filters', [
    "conceitosAvaliacao" => $conceitoAvaliacao,
    "filters" => $filters
])


@include('app.conceito-avaliacao.partials.list', [
    "conceitosAvaliacao" => $conceitoAvaliacao,
    "filters" => $filters
])

@endsection
