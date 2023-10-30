<div>
    <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="{{ $name }}">
        {{ $label }}
    </label>
@php
    $checked = '';
    if (isset($value) && !is_null($value)) {
        if ($value === App\Enums\SituacaoEquipeEnum::ATIVO) {
            $checked = 'checked="checked"';
        }
    }
@endphp
    <input
        type="radio"
        name="{{$name}}"
        {{$checked}}
        value="{{ App\Enums\SituacaoEquipeEnum::ATIVO }}"
    > {{App\Enums\SituacaoEquipeEnum::getKey(App\Enums\SituacaoEquipeEnum::ATIVO)}}

@php
    $checked = '';
    if (isset($value) && !is_null($value)) {
        if ($value === App\Enums\SituacaoEquipeEnum::INATIVO) {
            $checked = 'checked="checked"';
        }
    }
@endphp
    <input
        type="radio"
        name="{{$name}}"
        {{$checked}}
        value="{{ App\Enums\SituacaoEquipeEnum::INATIVO }}"
    > {{App\Enums\SituacaoEquipeEnum::getKey(App\Enums\SituacaoEquipeEnum::INATIVO)}}
</div>

