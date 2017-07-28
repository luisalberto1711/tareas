@extends('layout')
@section('contenido')
<br>
<br>
<br>
<div class='form'>
<form action="/musica/{{$edi->id}}/editando" method='post'>
    {{csrf_field()}}
    mostrar token
    {{csrf_token()}}
    <div class="form">
        <label for="">titulo</label>
        <input class="form-control" type="text" name="titulo" value="{{$edi->titulo}}">
    </div>
    <div class="form">
        <label for="">artista</label>
        <input class="form-control"  type="text" name="artista"  value="{{$edi->artista}}">
    </div>
    <input type="submit" value="Editar" class="btn success">
</form>
</div>