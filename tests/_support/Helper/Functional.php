<?php
namespace Helper;
use Laracasts\TestDummy\Factory;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{
    public function createClient()
    {
        $client = Factory::create('App\User');
    }
}
