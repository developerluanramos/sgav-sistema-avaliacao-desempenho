<x-layouts.headers.edit-header :title="'Fatores Avaliação'"/>

@include('components.alerts.form-errors')

<form action="{{route('fator-avaliacao.store', $modeloAvaliacao->uuid)}}" method="POST" id="fatorForm">
    @csrf
    @include('app.fator-avaliacao.partials.form')
</form>
