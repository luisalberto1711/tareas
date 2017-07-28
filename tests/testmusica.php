<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Musica;

class testmusica extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$m=Musica::firstOrCreate(array('titulo'=>'reggetonmetalero','artista'=>"dissiwill"));
        /*$mu=new Musica;
        $mu->titulo='reggetonmetalero';
        $mu->artista='dissiwill';
        $mu->save();
        //herramienta para ver estructuras
        dd($mu);*/
        //select * from musica
        $resul=Musica::All();
        //contamos los elementos
        $n=count($resul);
        $this->visit('/elementos')->see($n);
    }
    public function test1(){
        //$r=Musica::All();
        $test=$this->visit('/musica/')->see('Lista de musica')
            ->click('nuevo')
            ->seePageIs('/musica/crear')
            ->see('titulo')
            ->type('algo1','titulo')
            ->type('art1','artista')
            ->press('Enviar');
        $this->seeInDatabase('musica', ['titulo' => 'algo1']);
        /*foreach($r as $item){
            $test->see($item->artista);
        }*/
    }
}
