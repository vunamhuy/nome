<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5.1 hello');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
<<<<<<< f9ee1c69dd63d27d70a3e7e0b777509dfe353dcc
    public function testBasicExample1()
    {
        $this->assertTrue(true);
    }
}
