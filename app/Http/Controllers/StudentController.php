<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

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

    public function form(){
        $classList = Classes::all();
        return view("Pages.Forms.Student.StudentCreate",['classList'=>$classList]);
    }

    public function create(Request $request){
        $request->validate([
            'StudentID'=>'required|string|unique:student',
            'StudentName'=>'required|string',
            'DateOfBirth'=>'required',
            'image'=> "image|mimes:jpeg,png,jpg,gif"
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'image'=>"Vui lòng nhập đúng ảnh",
            'mimes'=>"Vui lòng nhập đúng định dạng ảnh"
        ]);
        $image = null;
        if ($request->hasFile("image")){
            $file = $request->file("image");
            $path = "uploads/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $image = $path.$fileName;
        }
        Student::create(
            [
                "StudentID"=>$request->get("StudentID"),
                "StudentName"=>$request->get("StudentName"),
                "image"=>$image,
                "DateOfBirth"=>$request->get("DateOfBirth"),
                "ClassID"=>$request->get("ClassID")
            ]
        );
        return redirect()->to("/student/list")->with("success","Create student successfully !");
    }

    public function edit($id){
        $classList = Classes::all();
        $student = Student::find($id); //1 obj Student with ID
        return view("Pages.Forms.Student.StudentEdit",[
            'student'=>$student,
            'classList'=>$classList
        ]);
    }

    public function update(Request $request,Student $student){
//        $student = Student::find($id);
        $student->update([
            "StudentName"=>$request->get("studentName"),
            "DateOfBirth"=>$request->get("DoB"),
            "ClassID"=>$request->get("classID")
        ]);
        return redirect()->to("/student/list")->with("success","Update student successfully !");
    }
    public function delete(Student $student){
        try {
            $student->delete();
            return redirect()->to("/student/list")->with("success","Delete student successfully !");
        }catch (\Exception $exception){
            return redirect()->back()->with("error","Delete fail !");
        }
    }
}
