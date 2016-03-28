<?php

$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('add new client');
$I->amLoggedAs(\Codeception\Util\Fixtures::get('AuthData'));
$I->amOnPage('clients/all');
$I->click('#add_client');
$I->amOnPage('/client/add');
$I->fillField('name', 'New Client');
$I->fillField('email', 'client@email.com');
$I->fillField('mobile', '+201014300691');
$I->click('Add');
$I->seeInCurrentUrl('client/add');
$I->see('Client has been added successfully !');