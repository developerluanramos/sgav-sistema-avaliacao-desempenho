@extends('app.layouts.app')

{{-- @section('breadcrumb')
    {{ Breadcrumbs::render('cargo.edit', $cargo) }}
@endsection --}}

@section('title', 'Edição Conceito de Avaliação')

<x-layouts.headers.edit-header :title="$conceitoAvaliacao->uuid.' - '.$conceitoAvaliacao->descricao"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{route('cargo.update', $conceitoAvaliacao->uuid)}}" method="POST">
    @method('PUT')
    @include('app.conceito-avaliacao.partials.form-edit', ["conceitoAvaliacao" => $conceitoAvaliacao])
    
    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        @foreach($conceitoAvaliacao->itensConceitosAvaliacao as $item)    
            <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                {{ $item->nome }}
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="excluir"
                    color="danger"
                    :route="''"
                />
            </li>
        @endforeach
    </ul>

</form>

@endsection
