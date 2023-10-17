@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Cargo"
        name="nome"
        lenght="6/12"
        :value="$servidor->nome ?? old('nome')"
    />
    <x-layouts.inputs.input-normal-text
        label="Ativo?"
        name="situacao"
        lenght="6/12"
        :value="$servidor->situacao ?? old('situacao')"
    />    
</div>

<x-layouts.buttons.submit-button text="Salvar"/>
