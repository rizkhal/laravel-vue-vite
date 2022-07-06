<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passion>
 */
class PassionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'category_id' => Category::inRandomOrder()->pluck('id')->first(),
            'summary' => $this->faker->text(30),
            'description' => $this->faker->text(200),
        ];
    }
}
