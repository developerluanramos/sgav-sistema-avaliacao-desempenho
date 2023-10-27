@extends('app.layouts.app')

@section('title', 'Nova Equipe')

<x-layouts.headers.create-header :title="'Nova Equipe'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('equipe.store') }}" method="POST" class="mt-4">
    @csrf
    @include('app.equipe.partials.form')
</form>

@endsection
