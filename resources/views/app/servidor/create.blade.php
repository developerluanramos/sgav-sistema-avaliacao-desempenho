@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('servidor.create') }}
@endsection

@section('title', 'Criar Servidor Público')

@section('content')
    <h1 class="text-2xl font-semibold">Criar Servidor Público</h1>
    <form action="{{ route('servidor.store') }}" method="POST" class="mt-4">
        @csrf
        @include('app.servidor.partials.form')
    </form>
@endsection
