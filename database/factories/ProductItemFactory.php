<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductItem;
use Faker\Generator as Faker;

$factory->define(ProductItem::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 8), true);
    $some_text = $faker->realText(rand(1000, 4000));
    $is_pub = rand(1, 5);
    $created_at = $faker->dateTimeBetween('-3 months', '-2 months');
    $data = [
        'category_id' => rand(1, 10),
        'slug' => Str::slug($title),
        'title' => $title,
        'content_raw' => $some_text,
        'content_html' => $some_text,
        'is_published' => $is_pub,
        'published_at' => $is_pub ? $faker->dateTimeBetween('-2 months', '-1 days') : null,
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
    return $data;
});
