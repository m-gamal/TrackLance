<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('delete specific client');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('clients/all');
$I->click('#delete_client_'.$client->id);
$I->click('Yes');
$I->canSeeInCurrentUrl('clients/all');
$I->see('Client has been deleted successfully !');