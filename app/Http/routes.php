<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Musica;
use App\Video;
Route::get('/elementos',function(){
    //resources/views/musica.blade.php
    $lista=Musica::All();
    $cantidad=count($lista);
    return View('musica',compact('cantidad','lista'));
});






Route::get('/', function () {
    return view('welcome');
});






Route::get('/lista',function(){
    $datos=Video::All();
    dd($datos);
});


Route::get('/musica/','musicaController@inicio');
Route::get('/musica/crear','musicaController@crear');

Route::get('/musica/crear1','musicaController@crearParaAng');

Route::post('/musica/post','musicaController@post');
Route::get('/musica/{id}/editar','musicaController@editar');
Route::get('/musica/{id}/borrar','musicaController@borrar');
Route::post('/musica/{id}/editando','musicaController@editando');

Route::get('/prueba/formulario/','pruebaController@formulario');
Route::get('/prueba/crear/','pruebaController@crear');
Route::auth();

//video
Route::get('/video/','videoController@inicio');
Route::get('/video/crear','videoController@crear');
Route::get('/video/ver','videoController@ver');

Route::get('/video/crear1','videoController@crearParaAng');

Route::post('/video/post','videoController@post');
Route::get('/video/{id}/editar','videoController@editar');
Route::get('/video/{id}/borrar','videoController@borrar');
Route::post('/video/{id}/editando','videoController@editando');







Route::get('/home', 'HomeController@index');

///servicios web
//rest API
Route::get('/musica/ApiLista', 'musicaController@apilista');
Route::get('/video/ApiLista', 'musicaController@apilista');
Route::delete('/musica/{id}/ApiBorrar', 'musicaController@apiborrar');
Route::post('/musica/ApiCrear', 'musicaController@apicrear');
Route::get('/musica/{id}/ApiGetMusica', 'musicaController@apigetmusica');

Route::post('/musica/ApiEditar', 'musicaController@apieditar');


Route::post('get/images', function(){
    $images = App\Images::where('realisation_id',Request::get('id'));
    return $images;
});



Route::post('get/images', function(){
    $images = App\Images::where('realisation_id',Request::get('id'))->get();
    return $images->toJson();
});