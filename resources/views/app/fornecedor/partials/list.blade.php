<table style="width: 100%;" class="table-auto">
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
                    <a href="{{route('fornecedor.show', ["uuid" => $fornecedor->uuid])}}">ver</a>
                    <a href="">editar</a>
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