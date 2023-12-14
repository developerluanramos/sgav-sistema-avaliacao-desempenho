@extends('app.layouts.app')

@section('title', 'Novo Vinculo')

<x-layouts.headers.create-header :title="'Novo Vinculo'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="#" method="POST">
    @csrf
    @include('app.vinculo.partials.form')
</form>

@endsection
