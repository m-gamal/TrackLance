<?php 
$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('login to my TrackLance account');
$I->amOnPage('login');
$I->fillField('email', 'mg.developer92@gmail.com');
$I->fillField('password', 'password');
$I->click('Login');
$I->canSeeInCurrentUrl('/clients/all');
