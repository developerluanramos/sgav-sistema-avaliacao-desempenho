@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('posto-trabalho.create') }}
@endsection

@section('title', 'Novo Posto de Trabalho')

<x-layouts.headers.create-header :title="'Novo Posto de Trabalho'"/>

@include('components.alerts.form-errors')

@section('content')

<form action="{{ route('posto-trabalho.store') }}" method="POST">
    @csrf
    @include('app.posto-trabalho.partials.form')
</form>

@endsection
