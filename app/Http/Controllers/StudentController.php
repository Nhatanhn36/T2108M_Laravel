<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(){
        $student = Student::simplePaginate(5);

        return view("Pages.Lists.StudentList",[
            "student"=>$student
        ]);
    }
}
