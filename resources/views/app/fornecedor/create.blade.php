<h3>Novo Fornecedor</h3>

@if($errors->any())
    @foreach($errors as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('fornecedor.store')}}" method="post">
    @include('app.fornecedor.partials.form')
</form>
