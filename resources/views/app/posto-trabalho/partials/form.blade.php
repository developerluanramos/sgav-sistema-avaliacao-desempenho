<div class="flex mb-2">
    <div class="flex-1">
        <x-layouts.inputs.input-normal-text
            label="Posto Trabalho"
            name="nome"
            class="w-full"
            lenght=""
            :value="$postoTrabalho->nome ?? old('nome')"
        />
    </div>
    <div class="ml-3">
        <x-layouts.buttons.submit-with-icon-button class="w-full md:w-auto" text="Salvar"/>
    </div>
</div>
