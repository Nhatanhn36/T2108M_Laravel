<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $student = Student::all()->pluck("StudentID")->toArray();
        $subject = Subject::all()->pluck("SubjectID")->toArray();
        $Result = ["Pass", "NotPass"];
        return [
            "ScoreID"=>$this->faker->randomNumber(),
            "Score"=>$this->faker->numberBetween(0,100),
            "Result"=>$this->faker->randomElement($Result),
            "StudentID"=>$this->faker->randomElement($student),
            "SubjectID"=>$this->faker->randomElement($subject)
        ];
    }
}
