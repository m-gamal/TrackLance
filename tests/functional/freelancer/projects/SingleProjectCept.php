<?php
$I = new FunctionalTester($scenario);
$I->wantTo('show singe project page');
$I->amLoggedAs(\Codeception\Util\Fixtures::get('AuthData'));
$project = factory(App\Project::class)->create();
$I->amOnPage('/projects/all');
$I->click($project->name);
$I->amOnPage('/project/'.$project->id);
$I->see($project->name);
$I->see($project->client->name);
$I->see('Details');
$I->see('Files');
$I->see('Tasks');
$I->see('Notes');
$I->see('Progress');
$I->see('Milestone');
