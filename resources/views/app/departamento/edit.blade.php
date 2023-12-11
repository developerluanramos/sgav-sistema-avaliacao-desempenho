@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('departamento.edit', $departamento) }}
@endsection

@section('title', 'Edição Departamento')

<x-layouts.headers.edit-header :title="$departamento->uuid.' - '.$departamento->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form  method="POST">
    @csrf
    @method('PUT')
    @include('app.departamento.partials.form')
</form>

@endsection

{{-- action="{{ route('setor.update', $setor->uuid) }}" --}}