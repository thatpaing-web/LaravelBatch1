<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function index(){

        $header = "This is my first template with data passing.";
        $students = [
            "Honey Nway Oo",
            "Mandalay"
        ];

        // return view('/members/index');
        return view('/members/index',compact('header','students'));
    }
}
