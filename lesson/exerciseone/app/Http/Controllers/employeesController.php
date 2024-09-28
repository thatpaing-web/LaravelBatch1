<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'mail'=>'aungkoko@gmail.com',
            'phone'=>'09123456'
        ];

        // dd($data);

        return view('employees/index',$data);
    }

    public function passingdataone(){

        $fullname = "Honey Nwae Oo";
        $city = "Mandalay";

        // return view('employees/dataone',["fullname"=>$fullname]);
        return view('employees/dataone',["fullname"=>$fullname,"city"=>$city]);
    }

    public function passingdatatwo(){

        $greeting = "Have a nice day";

        $students = [
            "Honey Nwey Oo",
            "Mandalay",
            "0911111"
        ];

        // dd($students);

        return view("employees/datatwo",["greeting"=>$greeting,"students"=>$students]);
    }

    public function passingdatathree(){

        $greeting = "Have a nice day";

        $students = [
            "Honey nway oo",
            "Mandalay",
            "0911111"
        ];
        return view('employees/datathree')->with("greeting",$greeting)->with("students",$students);
    }

    public function passingdatafour(){

        $greeting = "Have a nice day";
        $students = [
            "Honey nway oo",
            "Mandalay",
            "0911111"
        ];

        // return view('/employees/datafour',compact("greeting"),compact("students"));
        // return view('/employees/datafour',compact("greeting"))->with("students",$students);
        return view('/employees/datafour')->with(compact("greeting"))->with(compact("students"));

// recommand to use sayar  as follow 
        // return view('/employees/datafour',compact("greeting","students"));
        // return view('/employees/datafour')->with(compact("greeting","students"));
    }
}
