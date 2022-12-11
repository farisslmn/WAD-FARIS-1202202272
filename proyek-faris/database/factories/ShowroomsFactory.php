<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Showrooms>
 */
class ShowroomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "freed",
            'owner' => fake()->name(),
            'brand' => "honda",
            'purchase_date' => fake()->date(),
            'description' => fake()->paragraph(),
            'image' => 'images/IMG_3861.jpg',
            'status' => 'Lunas',
            'created_at' => now(),
            
        ];
    }
}
