<?php
$I = new FunctionalTester($scenario);
$I->wantTo('edit project info');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$project = factory(App\Project::class)->create();
$I->amOnPage('project/edit/'.$project->id);
$formData = [
    'name'  =>  'New Project',
    'client'  =>  $project->client_id,
    'type'  =>  'Type',
    'description'   =>  'Description',
    'start' =>  '01-03-2016',
    'end'   =>  '10-04-2016',
    'cost'  =>  '6000',
    'milestone' =>  '30',
    'status'    =>  'on'
];
$I->submitForm('#edit-project-form', $formData, 'Update');
$I->seeInCurrentUrl('project/edit/'.$project->id);
$I->see('Project has been updated successfully !');
