<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{

// dta passing 
    public function index(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'mail'=>'aungkoko@gmail.com',
            'phone'=>'09123456'
        ];

        // dd($data);

        return view('employees/index',$data);
    }

// data passin by array

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


// data passing by view() , with() , compact();
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

    public function show(){
        $data['employeedata'] = [
            'name'=>'Aung ko ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'09123456'
        ];

        return view('/employees/show',$data);
    }

// data passing by compact()

    public function edit(){
        $data['employeedata'] = [
            'name' => 'Aung ko ko',
            'email' => 'aungkoko@gmail.com',
            'phone' => '09123456'
        ];

        return view('employees/edit',compact("data"));
    }


// datapassing by array

    public function update(){
        $data['employeedata'] = [
            'name' => 'Aung ko ko',
            'email' => 'aungkoko@gamil.com',
            'phone' => '09123456'
        ];

        return view('employees/update',['employee'=>$data['employeedata']]);
    }
}
