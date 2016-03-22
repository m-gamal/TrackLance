<?php
$I = new FunctionalTester($scenario);
$I->wantTo('edit client info');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$client = factory(App\User::class)->create(['role'=> 0]);
$I->amOnPage('/client/edit/'.$client->id);
$I->fillField('name', $client->name);
$I->fillField('email', $client->email);
$I->fillField('mobile', $client->mobile);
$I->fillField('website', $client->website);
$I->click('Update');
$I->seeInCurrentUrl('client/edit/'.$client->id);
//$I->see('Client has been updated successfully !');
