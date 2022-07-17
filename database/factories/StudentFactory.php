<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $classes = Classes::all()->pluck("ClassID")->toArray();
        return [
            "StudentID"=>"SV".$this->faker->randomNumber(),
            "StudentName"=>$this->faker->firstName,
            "DateOfBirth"=>$this->faker->date("y-m-d","2005-01-01"),
            "ClassID"=>$this->faker->randomElement($classes)
        ];
    }
}
