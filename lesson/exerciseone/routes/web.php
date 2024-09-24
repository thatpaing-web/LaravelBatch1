<?php

use Illuminate\Support\Facades\Route;

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
