<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(mt_rand(10,18)),
            'price' => $this->faker->randomNumber(5, true),
            'user_id' => mt_rand(1,5),
            'book_category_id' =>mt_rand(1,3)
        ];
    }
}
