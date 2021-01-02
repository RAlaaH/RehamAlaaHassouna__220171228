<?php
//
//namespace Database\Factories;
//
//use App\Models\Post;
//use Illuminate\Database\Eloquent\Factories\Factory;
//
//class PostFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = Post::class;
//
//    /**
//     * Define the model's default state.
//     *
//     * @return array
//     */
//    public function definition()
//    {
//        return [
//            //
//        ];
//    }
//}


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
        'feature_image' => 'posts/feature_images/img.jpg',
        'large_image' => 'posts/large_image/img.jpg',
        'views' => random_int(20,200),
        'share' => random_int(20,200),
        'author_email' => $faker->email,
        'category_id' => \App\Category::all()->random(),
        'user_id' => \App\User::all()->random()
    ];
});

