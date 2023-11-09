<div class="conceitos-avaliacao-itens">
    <div class="flex flex-wrap -mx-3 mt-2 conceitos-avaliacao-item">
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
            onclick="deleteInputItem()"
            color="danger"
            lenght="2/12"
        />
    </div>
</div>

<script>
    function inputItem() {
        let containerAvaliacaoItens = document.getElementsByClassName('conceitos-avaliacao-itens');

        let conceitosAvaliacaoItem = document.getElementsByClassName('conceitos-avaliacao-item');

        let quantidadeItens = conceitosAvaliacaoItem.length;

        let cloneConceitosAvaliacaoItem = conceitosAvaliacaoItem[0].cloneNode(true);

        let inputItens = cloneConceitosAvaliacaoItem.getElementsByTagName('input');
        for (let item of inputItens) {
            item.name = item.name.replace('[0]', `[${quantidadeItens}]`);
            item.id = item.id.replace('[0]', `[${quantidadeItens}]`);
        }

        let buttonItens = cloneConceitosAvaliacaoItem.getElementsByTagName('button');
        for (let buttonDelete of buttonItens) {
            buttonDelete.onclick = function(){
                deleteInputItem(cloneConceitosAvaliacaoItem)
            };
        }

        containerAvaliacaoItens[0].appendChild(cloneConceitosAvaliacaoItem);
    }

    function deleteInputItem(element) {
        if (element)
            element.remove();
    }
</script>
