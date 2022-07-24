<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/about",[\App\Http\Controllers\WebController::class,"aboutUs"]);
//Route: Student
Route::group(['prefix'=>"student"],function (){
    Route::get("/list",[\App\Http\Controllers\StudentController::class,"all"]);
    Route::get("/create",[\App\Http\Controllers\StudentController::class,'form']);
    Route::post("/create",[\App\Http\Controllers\StudentController::class,'create']);
    Route::get("/edit/{id}",[\App\Http\Controllers\StudentController::class,"edit"]);
    Route::put("/edit/{student}",[\App\Http\Controllers\StudentController::class,"update"]); //neu nhieu hon 1 cot rang buoc thi them StudentID
    Route::delete("/delete/{student}",[\App\Http\Controllers\StudentController::class,"delete"]);
});


//Route: Classes
Route::get("/class/list",[\App\Http\Controllers\ClassesController::class,"all"]);
Route::get("/classes/create",[\App\Http\Controllers\WebController::class,"ClassesCreate"]);
Route::post("/classes/create",[\App\Http\Controllers\WebController::class,"ClassesEdit"]);

Route::get("/subjectlist",[\App\Http\Controllers\WebController::class,"SubjectView"]);

Route::get("/scorelist",[\App\Http\Controllers\WebController::class,"ScoreView"]);
Route::get("/studentsubjectlist",[\App\Http\Controllers\WebController::class,"SSView"]);


Route::get("/subject-create",[\App\Http\Controllers\WebController::class,"SubjectCreate"]);
Route::get("/subject-edit",[\App\Http\Controllers\WebController::class,"SubjectEdit"]);

Route::get("/score-create",[\App\Http\Controllers\WebController::class,"ScoreCreate"]);
Route::get("/score-edit",[\App\Http\Controllers\WebController::class,"ScoreEdit"]);



