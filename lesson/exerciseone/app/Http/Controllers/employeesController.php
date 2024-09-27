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
}
