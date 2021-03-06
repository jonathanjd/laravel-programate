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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function(\Faker\Generator $faker){

    $category = [
        'name' => $faker->word,
    ];

    return $category;

});

$factory->define(App\Article::class, function(\Faker\Generator $faker){

    $article = [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'categories_id' => $faker->numberBetween($min = 11, $max = 15),
        'users_id' => 1,
    ];

    return $article;

});