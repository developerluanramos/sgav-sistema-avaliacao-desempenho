@extends('app.layouts.app')

@section('title', 'Novo Usuário')

<x-layouts.headers.create-header :title="'Novo Usuário'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('usuario.store') }}" method="POST" class="mt-4">
    @include('app.usuario.partials.form')
</form>
@endsection
