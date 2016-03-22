<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('delete specific project');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$project = factory(App\Project::class)->create();
$I->amOnPage('projects/all');
$I->click('#delete_project_'.$project->id);
$I->click('Yes');
$I->canSeeInCurrentUrl('projects/all');
$I->see('Project has been deleted successfully !');