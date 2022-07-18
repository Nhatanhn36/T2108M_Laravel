<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }

    public function StudentView(){
        return view("Pages.Lists.StudentList");
    }
    public function SubjectView(){
        return view("Pages.Lists.SubjectList");
    }
    public function ClassView(){
        return view("Pages.Lists.ClassesList");
    }
    public function ScoreView(){
        return view("Pages.Lists.ScoreList");
    }
    public function SSView(){
        return view("Pages.Lists.StudentSubject");
    }

    public function StudentCreate(){
        return view("Pages.Forms.StudentCreate");
    }
    public function StudentEdit(){
        return view("Pages.Forms.StudentEdit");
    }
    public function SubjectCreate(){
        return view("Pages.Forms.SubjectCreate");
    }
    public function SubjectEdit(){
        return view("Pages.Forms.SubjectEdit");
    }
    public function ClassesCreate(){
        return view("Pages.Forms.ClassesCreate");
    }
    public function ClassesEdit(){
        return view("Pages.Forms.ClassesEdit");
    }
    public function ScoreCreate(){
        return view("Pages.Forms.ScoreCreate");
    }
    public function ScoreEdit(){
        return view("Pages.Forms.ScoreEdit");
    }
}
