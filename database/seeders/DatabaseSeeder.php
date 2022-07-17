<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Score;
use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Subject;
use Database\Factories\CLassesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //\App\Models\User::factory(10)->create();
//        Classes::factory(10)->create();
//        Subject::factory(20)->create();
//        Student::factory(100)->create();
//        Score::factory(24)->create();
        StudentSubject::factory(50)->create();

    }
}
