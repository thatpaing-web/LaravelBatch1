<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\staffsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get("/",function(){
        return "Save Myanmar";
    });

    Route::get("/sayar",function(){
        return "Hay, Sayar Nay Kaung Lar??";
    });

    // Route::get("/about",function(){
    //     return view("aboutme");
    // });

    // (or)

    Route::view("about","aboutme");

    // Route::get("/about/aboutcompany",function(){
    //     return view("aboutcompany");
    // });

    // (or)

    Route::view("/about/company","aboutcompany");

    // Route::get("contact",function(){
    //     return redirect("about");
    // });

    // (or)

    Route::redirect("contact","about/company");



    // Route::get("/students",[\App\Http\Controllers\studentsController::class,"index"])->name('students.index');
    // Route::get("/students/show",[\App\Http\Controllers\studentsController::class,"show"])->name('students.show');
    // Route::get("/students/edit",[\App\Http\Controllers\studentsController::class,"edit"])->name('students.edit');

    // 
    

    // Route::name('students.')->group(function(){
    //     Route::get("/students",[\App\Http\Controllers\studentsController::class,"index"])->name('index');
    //     Route::get("/students/show",[\App\Http\Controllers\studentsController::class,"show"])->name('show');
    //     Route::get("/students/edit",[\App\Http\Controllers\studentsController::class,"edit"])->name('edit');
    // });

    Route::name('students.')->group(function(){
        Route::get("/students",[studentsController::class,"index"])->name('index');
        Route::get("/students/show",[studentsController::class,"show"])->name('show');
        Route::get("/students/edit",[studentsController::class,"edit"])->name('edit');
    });

    Route::get('/staffs',[staffsController::class,'home'])->name('staffs.home');
    Route::get('/staffsparty',[staffsController::class,'party'])->name('staffs.party');
    Route::get('/staffsparty/{total}',[staffsController::class,'partytotal'])->name('staffs.partytotal');
    Route::get('/staffsparty/{stotal}/{status}',[staffsController::class,'partytotalconfirm'])->name('staffs.status');


    Route::get('employees',[employeesController::class,'index'])->name('employees.index');
    Route::get('/employees/show',[employeesController::class,'index'])->name('employees.show');