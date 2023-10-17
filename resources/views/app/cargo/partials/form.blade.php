@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Cargo"
        name="nome"
        lenght="6/12"
        :value="$servidor->nome ?? old('nome')"
    />    
</div>

<div class="form-check mb-2">
    <input type="hidden" name="situacao" value="0" >
    <input class="form-check-input"
           name="situacao" 
           type="checkbox"
           id="flexCheckDefault" 
           value="1"
           {{-- {{"situacao" == 1 ? "checked" : ''}} --}}
           />
    <label class="form-check-label" for="flexCheckDefault">
       Ativo
    </label>
</div>  

<x-layouts.buttons.submit-button text="Salvar"/>
