@extends('app.layouts.app')

@section('title', 'Fornecedores')

@section('content')

<x-layouts.headers.list-header :count="$fornecedores->total()" :title="'Fornecedores'" :route="'fornecedor/create'"/>

@include('components.alerts.form-success')

@include('app.fornecedor.partials.filters', [
    "fornecedores" => $fornecedores,
    "filters" => $filters
])

@include('app.fornecedor.partials.list', [
    "fornecedores" => $fornecedores,
    "filters" => $filters
])

@endsection
