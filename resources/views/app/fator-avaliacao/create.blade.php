<div class="block uppercase tracking-wide text-s font-bold mb-2 mt-2" for="grid-city">
    Fatores Avaliação
</div>

@include('components.alerts.form-errors')

<form action="{{route('fator-avaliacao.store', $modeloAvaliacao->uuid)}}" method="POST" id="fatorForm">
    @csrf
    @include('app.fator-avaliacao.partials.form')
</form>
