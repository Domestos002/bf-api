<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Verification;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Verification::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $contactFirstName = $faker->firstName($gender);
    $contactLastName = $faker->unique()->lastName($gender);

    return [
        'organization_name' => $faker->company,
        'contact_name' => "$contactFirstName $contactLastName",
        'contact_email' => Str::slug($contactLastName).'@'.$faker->freeEmailDomain,
        'status' => 0,
        'coordinator_id' => rand(1,6),
        'expired_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year'),
    ];
});
