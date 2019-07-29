<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use TPHST\User;
use TPHST\Article;
use TPHST\Category;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $sentence = $faker->sentence;
    return [
        'author_id' => create(User::class)->id,
        'category_id' => function() {
            Category::inRandomOrder()->first()->id;
        },
        'title' => $faker->sentence,
        'seo_title' => $faker->sentence,
        'excerpt' => str_limit($sentence, 30),
        'body' => $faker->text,
        'slug' => sluggify($sentence),
        'meta_description' => $faker->text,
        'meta_keywords' => $faker->words(5),
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
        'featured' => $faker->boolean(),
    ];
});