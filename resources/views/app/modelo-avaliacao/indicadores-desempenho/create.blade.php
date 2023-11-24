<x-layouts.modals.simple-modal :sessao="'modal-content-indicador-desempenho'" :titulo="'Indicadores de Desempenho'" :identificador="'modalIndicadoresDesempenho'">
    @section('modal-content-indicador-desempenho')
        <form action="{{route('indicador-desempenho.store')}}" method="POST">
            @csrf
            @include('app.modelo-avaliacao.indicadores-desempenho.partials.form', [
                "fatorAvaliacao" => $fatorAvaliacao,
                "modeloAvaliacao" => $modeloAvaliacao
            ])
        </form>
        <div>
            @include('app.modelo-avaliacao.indicadores-desempenho.partials.list-modal', ["fatorAvaliacao" => $fatorAvaliacao])
        </div>
    @endsection
</x-layouts.modals.simple-modal>
