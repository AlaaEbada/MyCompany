<?php

namespace Database\Factories;

use App\Models\Portfolio;
use App\Models\PortfolioCategory; // Add this to reference PortfolioCategory
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'slug' => $this->faker->unique()->word,
            'category_id' => PortfolioCategory::inRandomOrder()->first()->id, // Get a random category ID
            'image' => 'portfolios/https://via.placeholder.com/640x480.png?text=Portfolio+Image', // Placeholder image URL
        ];
    }
}
