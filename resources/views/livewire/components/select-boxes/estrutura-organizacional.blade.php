<div class="flex flex-wrap -mx-3 mb-2 mt-4">
    {{-- The whole world belongs to you. --}}
    @if(in_array('postos_trabalho', $components))
        <div class="w-full md:w-3/12 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="postoTrabalhoUuid">
                Postos de Trabalho
            </label>
            <div class="relative">
                <select wire:change="selecionaPostoTrabalho" wire:model="postoTrabalhoUuid" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="postos_trabalho_uuid" name="postos_trabalho_uuid">
                    <option value="">Escolha um posto e trabalho</option>
                    @foreach($postosTrabalho as $postoTrabalho)
                        @if (isset($postoTrabalhoUUid) && !is_null($postoTrabalhoUUid))
                            @php
                                $selected= '';
                                if ($postoTrabalho['uuid'] == $postoTrabalhoUUid) {
                                   $selected = "selected";
                                }
                            @endphp
                            <option {{$selected}} value="{{ $postoTrabalho['uuid'] }}">{{ $postoTrabalho['nome'] }}</option>
                        @else
                            <option value="{{ $postoTrabalho['uuid'] }}">{{ $postoTrabalho['nome'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    @endif
    @if(in_array('setores', $components))
        <div class="w-full md:w-3/12 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="postoTrabalhoUuid">
                Setores
            </label>
            <div class="relative">
                <select wire:change="selecionaSetor" wire:model="setorUuid" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="setorUuid" name="setorUuid">
                    <option value="">Escolha um Setor</option>
                    @foreach($setores as $setor)
                        @if (isset($setorUuid) && !is_null($setorUuid))
                            @php
                                $selected= '';
                                if ($setor['uuid'] == $setorUuid) {
                                   $selected = "selected";
                                }
                            @endphp
                            <option {{$selected}} value="{{ $setor['uuid'] }}">{{ $setor['nome'] }}</option>
                        @else
                            <option value="{{ $setor['uuid'] }}">{{ $setor['nome'] }}</option>
                        @endif
                    @endforeach
                </select>
                <div wire:loading>
                    Carregando componente...
                </div>
            </div>
        </div>
    @endif
    @if(in_array('departamentos', $components))
        <div class="w-full md:w-3/12 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="postoTrabalhoUuid">
                Departamentos
            </label>
            <div class="relative">
                <select wire:model="departamentoUuid" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="departamentoUuid" name="departamentoUuid">
                    <option value="">Escolha um Departamento</option>
                    @foreach($departamentos as $departamento)
                        @if (isset($departamentoUuid) && !is_null($departamentoUuid))
                            @php
                                $selected= '';
                                if ($departamento['uuid'] == $departamentoUuid) {
                                   $selected = "selected";
                                }
                            @endphp
                            <option {{$selected}} value="{{ $departamento['uuid'] }}">{{ $departamento['nome'] }}</option>
                        @else
                            <option value="{{ $departamento['uuid'] }}">{{ $departamento['nome'] }}</option>
                        @endif
                    @endforeach
                </select>
                <div wire:loading>
                    Carregando componente...
                </div>
            </div>
        </div>
    @endif
</div>
