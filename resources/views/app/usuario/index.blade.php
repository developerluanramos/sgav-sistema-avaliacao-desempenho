@extends('app.layouts.app')

@section('title', 'Usuários')

@section('content')

<x-layouts.headers.list-header :count="$user->total()" :title="'Usuários'" :route="'usuario/create'"/>

@include('components.alerts.form-success')

@include('app.usuario.partials.list', [
    "users" => $user,
    "filters" => $filters
])

@endsection
