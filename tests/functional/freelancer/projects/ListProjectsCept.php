<?php

$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('list all my projects');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$project = factory(App\Project::class)->create();
$I->amOnPage('projects/all');
$I->see('Projects List');
$I->see($project->name);