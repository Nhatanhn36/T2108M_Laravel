<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(Request $request){
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Student())->getTable();
//        $student = Student::leftJoin($classTable, $studentTable.".ClassID",'=', $classTable.".ClassID")
//            ->select($studentTable.'.*',$classTable.'.ClassName as classname',$classTable.'.Room')
//            ->simplePaginate(5);
        $classList = Classes::all();
        $paramName = $request->get("name");
        $paramClassID = $request->get("classID");
        $paramDoBFrom = $request->get("dateFrom");
        $paramDoBTo = $request->get("dateTo");
        $student = Student::DoBFrom($paramDoBFrom)->DoBTo($paramDoBTo)->ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
//        dd($student);
        return view("Pages.Lists.StudentList",[
            "student"=>$student,
            "classList"=>$classList
        ]);
    }
}
