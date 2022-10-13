<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
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
            'company_name' =>  $this->faker->name,
            'position' =>  $this->faker->name,
            'job_role' =>  $this->faker->sentence,
            'start_date' =>  $this->faker->date,
            'end_date' =>  $this->faker->date
        ];
    }
}
