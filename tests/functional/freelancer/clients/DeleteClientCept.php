<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('delete specific client');
$I->amLoggedAs(\Codeception\Util\Fixtures::get('AuthData'));
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('clients/all');
$I->click('#delete_client_'.$client->id);
$I->click('Yes');
$I->canSeeInCurrentUrl('clients/all');
$I->dontSee($client->name);
$I->see('Client has been deleted successfully !');