<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class testejemplo extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $this->visit('ejemplo_route')
            ->see("hola mundo")
            ->see('2')
            ->see('juan')
            ->see('thalia')
            ->see('fin');
    }
}
