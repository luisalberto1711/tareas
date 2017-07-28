@extends('layout')
@section('contenido')
<br><br><br><br>**

@include('vendor/validar')

<form action="/prueba/crear">
    <input type="text" name="titulo" value="{{old('titulo')}}" >
    <input type="text" name="artista"  value="{{old('artista')}}">
    <input type="submit" value="enviar">
</form>
