@foreach($fatoresAvaliacao as $index => $fatorAvaliacao)
    <div class="flex mb-4 mt-4">
        <label class=" w-2/12 uppercase text-s font-bold">
            {{ $fatorAvaliacao->nome }}
        </label>
        <form method="POST" action="/fator-avaliacao/{{ $fatorAvaliacao->uuid }}" class="w-1/12 uppercase text-s font-bold">
            @csrf
            @method('DELETE')
            |
            <x-layouts.buttons.action-button
                text="Ver"
                action="ver"
                color="secondary"
                :route="route('modelo-avaliacao.show', $modeloAvaliacao->uuid)"/>
            <x-layouts.buttons.action-button
                text="Editar"
                action="editar"
                color="primary"
                :route="route('modelo-avaliacao.edit', $modeloAvaliacao->uuid)"/>
            <x-layouts.buttons.action-button
                text="Excluir"
                action="excluir"
                color="danger"/>
        </form>
    </div>
@endforeach

