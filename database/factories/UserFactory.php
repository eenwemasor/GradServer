<?php

use Illuminate\Support\Str;
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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
	return [
	        'first_name' => $faker->name,
	        'last_name' => $faker->name,
	        'phone' => $faker->number,
	        'form_id' => null,
	        'package' => null,
	        'email' => 'admin@gradsuccess.com',
	        'password' => bcrypt('secret'),
	        'account_type' => 'Admin',
	    ];
});
