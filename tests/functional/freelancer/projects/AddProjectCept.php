<?php

$I = new FunctionalTester($scenario);
$I->am('a Freelancer');
$I->wantTo('add new project');
$I->amLoggedAs(['email' => 'mg.developer92@gmail.com', 'password' =>'password']);
$I->amOnPage('projects/all');
$I->click('#add_project');
$client = factory(App\User::class)->create(['role' => 0]);
$I->amOnPage('/project/add');
$formData = [
    'name'  =>  'New Project',
    'client'  =>  $client->id,
    'type'  =>  'Type',
    'description'   =>  'Description',
    'start' =>  '01-03-2016',
    'end'   =>  '10-04-2016',
    'cost'  =>  '6000',
    'milestone' =>  '30',
    'status'    =>  'on'
];
$I->submitForm('#add-project-form', $formData, 'Add');
$I->seeInCurrentUrl('project/add');
$I->see('Project has been added successfully !');