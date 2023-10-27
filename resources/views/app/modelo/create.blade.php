@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.create') }}
@endsection --}}

@section('title', 'Novo Modelo')

<x-layouts.headers.create-header :title="'Novo Modelo'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('modelo.store') }}" method="POST" class="mt-4">
    @csrf
    @include('app.modelo.partials.form')
</form>

@endsection

