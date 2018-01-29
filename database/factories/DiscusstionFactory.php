<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Discussion::class, function (Faker $faker) {
    $user_id = App\Models\User::pluck('id')->random();
    $category_id = App\Models\Category::pluck('id')->random();
    return [
        'user_id' => $user_id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
