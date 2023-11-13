<x-layouts.headers.edit-header :title="'Fatores Avaliação'"/>

@include('components.alerts.form-errors')

<form action="#" method="POST">
    @csrf
    @include('app.fatores-avaliacao.partials.form')
</form>
