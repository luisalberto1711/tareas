@extends('layout')
@section('contenido')
<br>
<br>
<br>
<div class='form'>
<form action="/video/post" name="myForm" method='post'>
    {{csrf_field()}}
    mostrar token
    {{csrf_token()}}
            @foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach

   <div class="form-group">
              <label for="nombre" class="col-md-2 control-label">Nombre</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="nombre" placeholder="nombre" >
              </div>
            </div>
 
            <div class="form-group">
                <label for="direccion" class="col-md-2 control-label">video</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="video">
              </div>
            </div>
            

            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">crear</button>
              
              </div>
            </div>
            </div>



   
</form>
</div>