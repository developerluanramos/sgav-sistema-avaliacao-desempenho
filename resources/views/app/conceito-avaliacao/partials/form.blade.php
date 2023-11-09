@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Conceito"
        name="descricao"
        lenght="10/12"
        :value="$conceitoAvaliacao->descricao ?? old('descricao')"
    />
    <x-layouts.buttons.simple-button
        text="Criar Item"
        onclick="inputItem()"
        color="success"
        lenght="2/12"
    />
</div>

<div class="itens">
    <div class="flex flex-wrap -mx-3 mt-2">
        <x-layouts.inputs.input-array-text
            label="Item"
            name="itens_conceitos_avaliacao[0][nome]"
            lenght="8/12"
            :value="$conceitoAvaliacao->nome ?? old('nome')"
        />
        <x-layouts.inputs.input-normal-number
            label="Pontuacao"
            name="itens_conceitos_avaliacao[0][pontuacao]"
            lenght="2/12"
            :value="$conceitoAvaliacao->pontuacao ?? old('pontuacao')"
        />
        <x-layouts.buttons.simple-button
            text="Excluir"
            onclick=""
            color="danger"
            lenght="2/12"
        />
    </div>
</div>

<x-layouts.inputs.input-item/>
<x-layouts.buttons.submit-button text="Salvar"/>
