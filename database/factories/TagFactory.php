<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Domain\Tag\Entities\Tag::class, function (Faker $faker) {

    $title= $faker->name;
    $slug = \Illuminate\Support\Str::slug($title);

    $name = array(
        "uz" => $title. '-Uzbek',
        "ru" => $title. '-Russion',
        "en" => $title. '-English'
    );

    return [
        'name' => $name,
        'slug' => $slug,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});
