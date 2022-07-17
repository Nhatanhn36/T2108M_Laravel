<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentSubjectFactory extends Factory
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
        return [
            "StudentID"=>$this->faker->randomElement($student),
            "SubjectID"=>$this->faker->randomElement($subject)
        ];
    }
}
