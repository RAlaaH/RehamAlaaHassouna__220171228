<?php
//
//namespace Database\Factories;
//
//use App\Models\Category;
//use Illuminate\Database\Eloquent\Factories\Factory;
//
//class CategoryFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = Category::class;
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

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'code' => strtoupper($faker->lexify('???'))
    ];
});
