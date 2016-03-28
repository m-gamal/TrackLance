<?php

$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('list all my projects');
$I->amLoggedAs(\Codeception\Util\Fixtures::get('AuthData'));
$project = factory(App\Project::class)->create();
$I->amOnPage('projects/all');
$I->see('Projects List');
$I->see($project->name);