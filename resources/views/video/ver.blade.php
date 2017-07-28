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
 

   <div class="form-group">
   <!--<video id="sampleMovie" src="/video/Nelly.mp4" controls></video>-->
   <video src="/vi/Nelly.mp4" controls autoplay >Hle</video> 
              



   
</form>
</div>