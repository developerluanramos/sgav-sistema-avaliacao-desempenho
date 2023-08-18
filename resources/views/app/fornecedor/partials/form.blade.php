@csrf

<input type="text" name="razao_social" value="{{$forncedor->razao_social ?? old('razao_social') }}">
<br>
<input type="text" name="nome_fantasia" value="{{$forncedor->nome_fantasia ?? old('nome_fantasia') }}">
<br>
<input type="submit" value="save">

