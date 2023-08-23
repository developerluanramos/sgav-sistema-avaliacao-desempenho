@extends('app.layouts.app')

@section('title', 'Lista de Fornecedores')

@section('content')

<x-layouts.headers.list-header :title="'lista de fornecedores'" :route="'fornecedor/create'"/>

@include('app.fornecedor.partials.filters', [
    "fornecedores" => $fornecedores,
    "filters" => $filters
])

@include('app.fornecedor.partials.list', [
    "fornecedores" => $fornecedores,
    "filters" => $filters
])

@endsection
