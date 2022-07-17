<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CLassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ClassID"=>"TH".$this->faker->randomNumber(),
            "ClassName"=>$this->faker->unique()->name,
            "room"=>$this->faker->languageCode
        ];
    }
}
