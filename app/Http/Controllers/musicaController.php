<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\mioerror;
use App\Musica;

class musicaController extends Controller
{
    public function inicio(){
        $lista=Musica::All();
        return view('musica/index',compact('lista'));
    }
    public function crear(){
         return view('musica/crear');
    }
    public function crearParaAng(){
         return view('musica/crear1');
    }
    public function post(mioerror $reque){
        

        try{

            $nueva=new Musica;
            $nueva->titulo=$reque->input('titulo');
            $nueva->artista=$reque->input('artista');
            $nueva->save();
            return redirect('musica/');
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
    public function apilista(){
        return Musica::All();
    }
    public function apiborrar($id){
        try{
            Musica::find($id)->delete();
            return ['estado'=>1];
        }catch(Exception $e){
            
            return ['estado'=>0,'error'=>$e];
        }
    }
    public function apigetmusica($id){
        try{
            //Musica::find($id);
            return Musica::find($id);
        }catch(Exception $e){
            
            return ['error'=>$e];
        }
    }
    public function  apieditar(Request $re){
        try{
            $edi=Musica::find($re->input('id'));

            $edi->titulo=$re->input('titulo');
            $edi->artista=$re->input('artista');
            $edi->save();
            return ['estado'=>1];
        }catch(Exception $e){
            return ['estado'=>0,'error'=>$e];
        }

        
    }
    public function apicrear(mioerror $reque){
        //$this->validate()

        try{

            $nueva=new Musica;
            $nueva->titulo=$reque->input('titulo');
            $nueva->artista=$reque->input('artista');
            $nueva->save();
            return ['estado'=>1];
        }catch(Exception $e){
            return ['estado'=>0];
        }

        return "mala";
    }
}
