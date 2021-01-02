<?php
//
//namespace Database\Factories;
//
//use App\Models\Contact;
//use Illuminate\Database\Eloquent\Factories\Factory;
//
//class ContactFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = Contact::class;
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

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'subject' => $faker->sentence,
        'message' => $faker->text,
        'ip' => $faker->ipv4
    ];
});
