<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'first_name' => $faker->text,
        'last_name' => $faker->text,
        'phone_number' => $faker->text,
        'email' => $faker->text,
        'address' => $faker->text,
        'date_of_birth' => $faker->word,
        'career_description' => $faker->text,
        'personal_website' => $faker->text,
        'gender' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
