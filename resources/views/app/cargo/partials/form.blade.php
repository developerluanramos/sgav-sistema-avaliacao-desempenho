@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Cargo"
        name="nome"
        lenght="8/12"
        :value="$servidor->nome ?? old('nome')"
    />    
</div>
    <x-layouts.inputs.input-switch
    label="Situação"
    name="situacao"
/>

<x-layouts.buttons.submit-button text="Salvar"/>
