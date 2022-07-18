<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(){
//        $classes = Classes::all();
//        $classes = Classes::where("ClassID",'like','TH1%')->get();
//        $classes = Classes::orderBy("ClassName","asc")
//            ->select("ClassID","ClassName","Room")
//            ->limit(5)
//            ->skip(5)
//            ->get();
        $classes = Classes::withCount("students")->simplePaginate(5);
//        dd($classes);
        return view("Pages.Lists.ClassesList",[
            "classes"=>$classes
        ]);
    }

}
