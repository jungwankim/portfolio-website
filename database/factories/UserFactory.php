<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Work::class, function (Faker $faker) {

    return [
      	'compnay_name' => $faker->company,
      	'position' => $faker->jobTitle,
        'location' => $faker->city,
      	'starting_date' => $faker->date,
      	'ending_date' => $faker->date,
      	'description' => $faker->paragraph,
    ];
});


$factory->define(App\Project::class, function (Faker $faker) {
    return [
     		'title' => $faker->name,
     		'subtitle' => $faker->name,
      	'starting_date' => $faker->date,
      	'ending_date' => $faker->date,
      	'url' => $faker->url,
      	'description' => $faker->paragraph,
    ];
});


$factory->define(App\Skill::class, function (Faker $faker) {
    return [
     	'category' => $faker->randomElement($array = array ('a','b','c')),
     	'name' => $faker->name,
    ];
});


