<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//Illuminate = collection of pre written classes that provide support

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tagline' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];
    }
}
