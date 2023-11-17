<ul class="w-full text-sm flex flex-col items-start font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    @foreach($fatoresAvaliacao as $index => $fatorAvaliacao)
        <li class="w-full flex px-4 py-2 uppercase font-bold border-b border-gray-200 rounded-t-lg dark:border-gray-600">
            {{ $fatorAvaliacao->nome }}

            <form method="POST" action="{{route('fator-avaliacao.update', $fatorAvaliacao->uuid)}}" class="flex ml-auto items-center">
                @csrf
                @method('PUT')
                <x-layouts.modals.simple-modal :titulo="'Edição'">
                    @section('modal-content')
                            @include('app.fator-avaliacao.partials.form', ["fatorAvaliacao" => $fatorAvaliacao])
                    @endsection
                </x-layouts.modals.simple-modal>
                <x-layouts.buttons.edit-action-button
                        color="primary"
                />
            </form>

            <form method="POST" action="/fator-avaliacao/{{ $fatorAvaliacao->uuid }}" class="flex items-center">
                @csrf
                @method('DELETE')
                <div class="m-1"></div>
                <x-layouts.buttons.submit-delete-button
                    color="danger"/>
            </form>
        </li>
    @endforeach
</ul>




