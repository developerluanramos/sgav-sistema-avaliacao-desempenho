@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Modelo"
        name="nome"
        lenght="8/12"
        :value="$cargo->nome ?? old('nome')"
    />    
</div>
    <x-layouts.inputs.input-switch
    label="Situação"
    name="situacao"
    :value="$formData->situacao ?? old('situacao')"
/>
    <x-layouts.inputs.input-switch-goal
    label="Finalidade"
    name="finalidade"
    :value="$formData->finalidade ?? old('finalidade')"
/>

<x-layouts.buttons.submit-button text="Salvar"/>
