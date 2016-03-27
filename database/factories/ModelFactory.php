<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'mobile' => $faker->phoneNumber,
        'website'   =>  $faker->url
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name'                  => $faker->name,
        'client_id'             =>  function () {
                    return factory(App\User::class)->create(['role'=>0])->id;
        },
        'type'                  =>  $faker->word,
        'description'           =>  $faker->paragraph,
        'start'                 =>  $faker->date() ,
        'end'                   =>  $faker-> date(),
        'cost'                  => $faker->numerify(),
        'milestone'             =>  $faker->numberBetween(0, 100),
        'status'                => 1
    ];
});



$factory->define(App\ProjectNotes::class, function (Faker\Generator $faker) {
    return [
        'title'                  => $faker->name,
        'project_id'             =>  function () {
            return factory(App\Project::class)->create()->id;
        },
        'description'           =>  $faker->paragraph,
        'status'                => 1
    ];
});
