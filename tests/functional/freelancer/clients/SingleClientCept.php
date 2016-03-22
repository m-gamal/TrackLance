<?php
$I = new FunctionalTester($scenario);
$I->wantTo('show singe client page');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('/clients/all');
$I->click($client->name);
$I->amOnPage('/client/'.$client->id);
$I->see('Single');
