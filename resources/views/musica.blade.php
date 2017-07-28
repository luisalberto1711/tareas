@extends('layout')
@section('contenido')
<br>
<br>
<br>
<br>
        {{$cantidad}}

        <br>            
        <ul>
        @foreach($lista as $item)
                <li>{{$item->titulo}}</li>
        @endforeach
        </ul>
