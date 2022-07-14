<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }

    public function CategoryCreate(){
        return view("Pages.Forms.Create-Category");
    }

    public function CategoryEdit(){
        return view("Pages.Forms.Edit-Category");
    }

    public function ProductCreate(){
        return view("Pages.Forms.Create-Product");
    }
    public function ProductEdit(){
        return view("Pages.Forms.Edit-Product");
    }
    public function ViewCategory(){
        return view("Pages.Lists.Category");
    }
    public function ViewProduct(){
        return view("Pages.Lists.Product");
    }
}
