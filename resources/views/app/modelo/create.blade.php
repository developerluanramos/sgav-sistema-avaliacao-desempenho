@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.create') }}
@endsection --}}

@section('title', 'Modelo Cargo')

<x-layouts.headers.create-header :title="'Novo Modelo'"/>

@section('content')

@include('components.alerts.form-errors')

<form method="POST" class="mt-4">
    @csrf
    @include('app.modelo.partials.form')
</form>

@endsection

{{-- action="{{ route('cargo.store') }}" --}}