@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo') }}
@endsection --}}

@section('title', 'Conceitos De Avaliação')

@section('content')

<x-layouts.headers.list-header :count="$conceitosAvaliacao->total()" :title="'Conceitos De Avaliacao'" :route="'conceito-avaliacao/create'"/>

@include('components.alerts.form-success')

@include('app.conceito-avaliacao.partials.filters', [
    "conceitosAvaliacao" => $conceitosAvaliacao,
    "filters" => $filters
])


@include('app.conceito-avaliacao.partials.list', [
    "conceitosAvaliacao" => $conceitosAvaliacao,
    "filters" => $filters
])

@endsection
