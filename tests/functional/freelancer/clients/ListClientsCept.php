<?php

$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('list all my clients');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('clients/all');
$I->see($client->name);