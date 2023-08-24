<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <table style="width: 100%;" class="table-auto min-w-full text-left text-sm font-light">
                <thead>
                    <tr>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>Data cadastro</th>
                        <th>Última atualização</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fornecedores->items() as $index => $fornecedor)
                        <tr>
                            <td>{{$fornecedor->razao_social}}</td>
                            <td>{{$fornecedor->nome_fantasia}}</td>
                            <td>{{$fornecedor->created_at}}</td>
                            <td>{{$fornecedor->updated_at}}</td>
                            <td>
                                <x-layouts.buttons.link-button  label="Ver" :route="route('fornecedor.show', $fornecedor->uuid)"/>
                                <x-layouts.buttons.link-button  label="Editar" :route="route('fornecedor.edit', $fornecedor->uuid)"/>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">vazio</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <x-pagination.simple-pagination :paginator="$fornecedores" :appends="$filters" />
        </div>
      </div>
    </div>
</div>