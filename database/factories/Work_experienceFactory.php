<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Work_experience;
use Faker\Generator as Faker;

$factory->define(Work_experience::class, function (Faker $faker) {

    return [
        'Name_of_employer' => $faker->text,
        'industry_employer' => $faker->text,
        'job_title' => $faker->text,
        'year_in' => $faker->word,
        'year_out' => $faker->word,
        'job_catergory' => $faker->text,
        'job_level' => $faker->text,
        'job_description' => $faker->text,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
