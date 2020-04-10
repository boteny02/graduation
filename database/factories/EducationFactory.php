<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {

    return [
        'school_name' => $faker->text,
        'school_web' => $faker->text,
        'degree_name' => $faker->text,
        'grade' => $faker->text,
        'year_in' => $faker->word,
        'year_out' => $faker->word,
        'education_level' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
