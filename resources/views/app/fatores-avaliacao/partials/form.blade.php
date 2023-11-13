<hr class="block mb-4 mt-4 border-t-2 border-gray-600">

<div class="block uppercase tracking-wide text-s font-bold mb-2 mt-2" for="grid-city">
    Fatores Avaliação
</div>

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Fator"
        name="nome"
        lenght="10/12"
        :value="$fatorAvaliacao->nome ?? old('nome')"
    />
    <x-layouts.buttons.simple-button
        text="Criar Fator"
        onclick="#"
        color="success"
        lenght="2/12"
    />
</div>
