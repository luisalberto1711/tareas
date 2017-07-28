<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\validarRequest;
use App\Musica;

class pruebaController extends Controller
{
    public function formulario(){
        return view('prueba/form');
    }
    var $rules=[
            'titulo'=>'min:5|required|max:6',
            'artista'=>'alpha_num',
        ];
    ///validando en el controller
    /*
    public function crear(Request $request){
        ///validando
        $val=$this->validate($request,$this->rules);
        //error es una variable donde carga todos los errores
        ///if($val->fail())
        //$nuevo=new Musica;
        //$nuevo->titulo=$request->inpuet('titulo');
        Musica::Create($request->all());
        return redirect('/musica');
    }*/
    public function crear(validarRequest $request){
        Musica::Create($request->all());
        return redirect('/musica');
    }
}
