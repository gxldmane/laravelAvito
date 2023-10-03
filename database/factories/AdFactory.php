<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(25),
            'price' => random_int(100, 5000),
            'image' => $this->faker->imageUrl('200', '200'),
            'category_id' => Category::get()->random()->id,
            'city_id' => City::get()->random()->id,
            'user_id' => User::get()->random()->id
        ];
    }
}
