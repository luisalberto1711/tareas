@extends('layout')
@section('contenido')
<br>
<br>
<br>
<div class='form'>
<form action="/musica/post" name="myForm" method='post'>
    {{csrf_field()}}
    mostrar token
    {{csrf_token()}}
            @foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach

    <div class="form">
        <label for="">titulo</label>
        <input required class="form-control" type="text" name="titulo" value="{{old('titulo')}}">
        
        <li>{{ $errors->first('titulo') }}</li>
    </div>
    <div class="form">
        <label for="">artista</label>
        <input class="form-control"  type="text" name="artista" value="{{old('artista')}}">
    </div>
    <input type="submit" value="Enviar" class="btn success">
</form>
</div>