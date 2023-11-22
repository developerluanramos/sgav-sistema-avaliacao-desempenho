<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Indicadores"
        name="nome"
        lenght="6/12"
        :value="''"
    />
    <x-layouts.inputs.input-normal-select-array
        label="Conceitos"
        name="conceito_avaliacao_uuid"
        origin="conceito_avaliacao_uuid"
        lenght="4/12"
        :data="$formData['conceitos']"
        :value="''"
    />
    <x-layouts.buttons.submit-with-icon-button class="w-full md:w-2/12" text="Salvar"/>
</div>

