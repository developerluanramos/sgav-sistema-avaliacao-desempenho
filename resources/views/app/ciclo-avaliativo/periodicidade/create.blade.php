<form method="POST" action="{{route('ciclo-avaliativo.periodicidade.store')}}">
    @csrf
    <x-layouts.buttons.submit-button text="Salvar"/>
</form>
