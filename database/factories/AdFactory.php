<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\FakePeople;
use Alirezasedghi\LaravelImageFaker\Services\Kittens;
use Alirezasedghi\LaravelImageFaker\Services\LoremFlickr;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;
use Alirezasedghi\LaravelImageFaker\Services\PlaceDog;
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
        $imageFaker = new ImageFaker(new Picsum());
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(25),
            'price' => random_int(100, 5000),
            'image' => $imageFaker->image('public/storage/images', 300, 300, 'images'),
            'category_id' => Category::get()->random()->id,
            'city_id' => City::get()->random()->id,
            'user_id' => User::get()->random()->id
        ];
    }
}
