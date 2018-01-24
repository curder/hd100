<?php

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomElement(Category::pluck('id')->all()),
        'title' => implode(' ', $faker->words(6)),
        'slug' => implode('-', $faker->words(6)),
        'url' => $faker->url,
        'description' => implode(' ', $faker->words(10)),
        'order' => $faker->randomElement(range(0, 100)),
        'cover' => $faker->imageUrl(600, 400),
        'body' => $faker->paragraph(6),
        'index_recommend' => $faker->randomElement([false, true]),
        'seo_title' => implode(' ', $faker->words(5)),
        'seo_keywords' => implode(' ', $faker->words(10)),
        'seo_description' => implode(' ', $faker->words(15)),
    ];
});
