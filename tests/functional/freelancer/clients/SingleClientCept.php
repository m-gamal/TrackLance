<?php
$I = new FunctionalTester($scenario);
$I->wantTo('show singe client page');
$I->amLoggedAs(\Codeception\Util\Fixtures::get('AuthData'));
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('/clients/all');
$I->click($client->name);
$I->amOnPage('/client/'.$client->id);
$I->see('Single');
