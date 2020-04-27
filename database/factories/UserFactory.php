<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\user;
use Faker\Generator as Faker;

$factory->define(user::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'gender' => $faker->word,
        'date_of_birth' => $faker->word,
        'is_subscribed' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
