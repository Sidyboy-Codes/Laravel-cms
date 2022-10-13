<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
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
            'institutename'=> $this->faker->name,
            'location'=> $this->faker->name,
            'degree'=> $this->faker->name,
            'completedate'=> $this->faker->date,
            'info'=> $this->faker->sentence
        ];
    }
}
