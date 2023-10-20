@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.edit', $cargo) }}
@endsection --}}

@section('title', 'Edição Cargo')

<x-layouts.headers.edit-header :title="$cargo->uuid.' - '.$cargo->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form  method="POST">
    @method('PUT')
    @include('app.cargo.partials.form', ["cargo" => $cargo])
</form>

@endsection

{{-- action="{{route('fornecedor.update', $fornecedor->uuid)}}" --}}