<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MoviesFactory extends Factory
{

    public function definition()
    {
        return [
            'movies_id' => $this->faker->randomElement([1,2,3]),
            'name' => $this->faker->randomElement(['coming to america', 'half of the yellow sun', 'mission impossible']),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'genre' => $this->faker->randomElement(['action','drama','comedy', 'sci-fi', 'thriller'])
        ];
    }
}
