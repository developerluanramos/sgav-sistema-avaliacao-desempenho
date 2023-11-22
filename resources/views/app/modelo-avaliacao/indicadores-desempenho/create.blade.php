<x-layouts.modals.simple-modal :sessao="'modal-content-indicador-desempenho'" :titulo="'Indicadores de Desempenho'" :identificador="'modalIndicadoresDesempenho'">
    @section('modal-content-indicador-desempenho')
        @include('app.modelo-avaliacao.indicadores-desempenho.partials.form')
        <div>
            @include('app.modelo-avaliacao.indicadores-desempenho.partials.list-modal', ["fatorAvaliacao" => $fatorAvaliacao])
        </div>
    @endsection
</x-layouts.modals.simple-modal>
