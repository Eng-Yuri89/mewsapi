<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content' =>$faker->text(488),
        'data_written' => now(),
        'featured_image' =>$faker->imageUrl(),
        'votes_up'=>$faker->numberBetween(1,100),
        'vote_down'=>$faker->numberBetween(1,100),
        'user_id'=>$faker->numberBetween(1,50),
        'category_id'=>$faker->numberBetween(1,15)

    ];
});
