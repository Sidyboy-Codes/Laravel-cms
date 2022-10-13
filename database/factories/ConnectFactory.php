<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConnectFactory extends Factory
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
            'link'=> $this->faker->name,
            'title'=> $this->faker->name
        ];
    }
}
