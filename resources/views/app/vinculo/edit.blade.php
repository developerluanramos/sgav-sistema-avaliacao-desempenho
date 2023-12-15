@extends('app.layouts.app')

@section('title', 'Edição Vinculo')

<x-layouts.headers.edit-header :title="$vinculo->uuid.' - '.$vinculo->servidor['nome']"/>

@section('content')


@include('components.alerts.form-errors')


<form action="#" method="POST">
    @csrf
    @method('PUT')
    @include('app.vinculo.partials.form')
</form>


@endsection
