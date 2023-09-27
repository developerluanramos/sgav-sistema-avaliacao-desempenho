@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Nome"
        name="nome"
        lenght="6/12"
        :value="$servidor->nome ?? old('nome')"
    />
    <x-layouts.inputs.input-normal-text
        label="Email"
        name="email"
        lenght="6/12"
        :value="$servidor->email ?? old('email')"
    />
</div>
<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-date
        label="Data de Nascimento"
        name="data_nascimento"
        :value="$servidor->data_nascimento ?? old('data_nascimento')"
    />
    <x-layouts.inputs.input-date
        label="Data de Admissão"
        name="data_admissao"
        :value="$servidor->data_admissao ?? old('data_admissao')"
    />
</div>

<x-layouts.inputs.input-normal-select
    label="Cargo"
    name="cargo_uuid"
    origin="cargo_uuid"
    lenght="4/12"
    :data="$formData['cargos']"
    :selected="$servidor->cargo_uuid ?? old('cargo_uuid')"
    />
    <x-layouts.inputs.input-normal-text
        label="Matrícula"
        name="matricula"
        lenght="4/12"
        :value="$servidor->matricula ?? old('matricula')"
    />
</div>

<x-layouts.buttons.submit-button text="Salvar"  />
