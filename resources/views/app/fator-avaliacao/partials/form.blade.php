<hr class=" mb-4 mt-4">

<div class="block uppercase tracking-wide text-s font-bold mb-2 mt-2" for="grid-city">
    Fatores Avaliação
</div>

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Fator"
        name="nome"
        lenght="6/12"
        :value="$fatorAvaliacao->nome ?? old('nome')"
    />
    <x-layouts.inputs.input-normal-select-array
        label="Conceitos"
        name="conceito_avaliacao_uuid"
        origin="conceito_avaliacao_uuid"
        lenght="4/12"
        :data="$formData['conceitos']"
        :value="$fatorAvaliacao->conceito_avaliacao_uuid ?? old('conceito_avaliacao_uuid')"
    />
    <x-layouts.buttons.submit-button text="Criar Fator"/>
</div>

