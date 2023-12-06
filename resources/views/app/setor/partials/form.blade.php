@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Setor"
        name="nome"
        lenght="6/12"
        :value="$setor->nome ?? old('nome')"
    />
    {{-- <x-layouts.inputs.input-normal-select-array
        label="Posto de Trabalho"
        name="postos_trabalho_uuid"
        origin="postos_trabalho_uuid"
        lenght="4/12"
        :data="$formData['postosTrabalho']"
        :value="$setor->postos_trabalho_uuid ?? old('postos_trabaho_uuid')"
    />   --}}
</div>
    
<x-layouts.buttons.submit-button text="Salvar"/>
