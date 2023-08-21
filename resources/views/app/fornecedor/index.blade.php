@extends('app.layouts.app')

@section('title', 'fornecedores')

@section('content')
<h3>Fornecedores</h3>
<a href="fornecedor/create">Novo</a>
<table style="width: 100%; border: solid 1px black">
    <thead>
        <tr>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>Data cadastro</th>
            <th>Ũltima atualização</th>
        </tr>
    </thead>
    <tbody>
        @forelse($fornecedores->items() as $index => $fornecedor)
            <tr>
                <td>{{$fornecedor->razao_social}}</td>
                <td>{{$fornecedor->nome_fantasia}}</td>
                <td>{{$fornecedor->created_at}}</td>
                <td>{{$fornecedor->updated_at}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">vazio</td>
            </tr>
        @endforelse
    </tbody>
</table>
<x-pagination.simple-pagination :paginator="$fornecedores" :appends="$filters" />
@endsection
