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
Route::get("/createCategory",[\App\Http\Controllers\WebController::class,"CategoryCreate"]);
Route::get("/editCategory",[\App\Http\Controllers\WebController::class,"CategoryEdit"]);
Route::get("/createProduct",[\App\Http\Controllers\WebController::class,"ProductCreate"]);
Route::get("/editProduct",[\App\Http\Controllers\WebController::class,"ProductEdit"]);
Route::get("/category",[\App\Http\Controllers\WebController::class,"ViewCategory"]);
Route::get("/product",[\App\Http\Controllers\WebController::class,"ViewProduct"]);
