<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Domain\PostCategory\Entities\PostCategory::class, function (Faker $faker) {

    $title = $faker->name;
    $description = $faker->paragraph;
    $slug = \Illuminate\Support\Str::slug($title);

    $name = ([
        "uz" => $title. '-Uzbek',
        "ru" => $title. '-Russion',
        "en" => $title. '-English'
    ]);
    $descriptions= ([
        "uz" => $description. '-Uzbek',
        "ru" => $description. '-Russion',
        "en" => $description. '-English'
    ]);

    return [
        'name' => $name,
        'description' => $descriptions,
        'slug' => $slug,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});
