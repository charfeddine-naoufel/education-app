<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\comment;
use Faker\Generator as Faker;

$factory->define(comment::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'body' => $faker->text,
        'description' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
