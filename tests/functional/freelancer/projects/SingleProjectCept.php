<?php
$I = new FunctionalTester($scenario);
$I->wantTo('show singe project page');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$project = factory(App\Project::class)->create();
$I->amOnPage('/projects/all');
$I->click($project->name);
$I->amOnPage('/project/'.$project->id);
$I->see('Single');
