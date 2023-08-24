
@csrf
<x-layouts.inputs.input-normal-text 
    label="Razão social"
    name="razao_social"  
    :value="$fornecedor->razao_social ?? old('razao_social')"/>
<x-layouts.inputs.input-normal-text 
    label="Nome fantasia"
    name="nome_fantasia"  
    :value="$fornecedor->nome_fantasia ?? old('nome_fantasia')"/>
<x-layouts.buttons.submit-button text="Salvar"  />
  