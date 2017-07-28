@extends('layout')
@section('contenido')
<br>
<br>
<br>
<br>
@{{var1}}
<h1>Lista de videos</h1>
<a href="/video/crear" class='btn success'>nuevo</a>
<table>
    <tr>
        <th>nombre</th>
       <th>direccion</th>
       <th>ver</th>
       
       
    </tr>
@foreach($lista as $item)
    <tr>
        <td>{{$item->nombre}}</td>
       <td>{{$item->artista}}</td>
       <td><a href="/video/ver"  >Ver</a></td>
      <!-- <td><a href="/musica/{{$item->id}}/editar">editar</a></td>-->
    </tr>
@endforeach
</table>
<script>
    function confirma(evt){
        if(confirm('Esta seguro de borrar')){
            return true;
        }else
            return false;
    }
</script>



<!-- Modal -->
<!--
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ventanita</h4>
      </div>
      <div class="modal-body" ui-view="contenido" >
        
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div  > <button  data-toggle="modal" data-target="#myModal" class="btn btn-succes" ui-sref="nuevoMusica" >nuevo</button></div>
<table class="table">
    <tr>
        <th>Titulo</th>
        <th>artista</th>
        <th>borrar</th>
        <th>editar</th>
    </tr>

    <tr ng-repeat="item in lista">
        <td>@{{item.titulo}}</td>
        <td>@{{item.artista}}</td>
        <td><a href="#" class="btn btn-success glyphicon glyphicon-trash"  ng-click="onclickBorrar(item.id)" ></a></td>
        <td><a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-success glyphicon glyphicon-refresh"  ui-sref="nuevoMusica"  ng-click="onclickeditar(item)" ></a></td>
    </tr>

</table>

-->
