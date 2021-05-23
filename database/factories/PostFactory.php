<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Domain\Post\Entities\Post::class, function (Faker $faker) {
    $title= $faker->name;
    $description = $faker->paragraph;
    $slug = \Illuminate\Support\Str::slug($title);

    $name = array(
        "uz" => $title. '-Uzbek',
        "ru" => $title. '-Russion',
        "en" => $title. '-English'
    );
    $descriptions= array(
        "uz" => $description. '-Uzbek',
        "ru" => $description. '-Russion',
        "en" => $description. '-English'
    );

    return [
        'name' => $name,
        'description' => $descriptions,
        'category_id' => $faker->numberBetween(1, 100),
        'author_id' => 1,
        'slug' => $slug,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];

});
