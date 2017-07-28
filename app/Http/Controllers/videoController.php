<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\mioerror;
use App\Video;
use storage;

class videoController extends Controller
{
    public function inicio(){
        $lista=Video::All();
        return view('video/index',compact('lista'));
    }
    public function crear(){
         return view('video/crear');
    }
     public function ver(){
         return view('video/ver');
    }
    public function crearParaAng(){
         return view('video/crear1');
    }
    public function post(mioerror $reque){
        

        try{

            $nueva=new Video;
            $nueva->nombre=$reque->input('nombre');
            


$vid=$reque->file(direccion);
$file_route =time().'_'.$vid->getClienOriginalName();
Storage::disk('videos')->put($file_route, file_get_contents($vid->gettRealPath() ));
  $nueva->direccion=$reque->input('direccion');

            $nueva->save();
            return redirect('video/');
        }catch(Exception $e){
            return "mala";
        }

        return "mala";
    }
    public function borrar($id){
        Musica::find($id)->delete();
        return redirect('musica/');
    }
    public function editar($id){
        $edi=Musica::find($id);
        return view('musica/editar',compact('edi'));
    }
    public function  editando(Request $re,$id){
        $edi=Musica::find($id);
        $edi->titulo=$re->input('titulo');
        $edi->artista=$re->input('artista');
        $edi->save();
        return redirect('musica/');
    }

}

//////


