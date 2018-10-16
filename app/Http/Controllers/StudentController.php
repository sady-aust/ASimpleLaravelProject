<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view("home");
    }

    public function about(){
        $name = "Toufiqul Islam";
        $age = 56;

        //passing data from comtroller to view
        //method-1
       // return view("about",compact("name","age"));

        //method-2
      /* return view("about")
                ->with("name",$name)
                ->with("age",$age);*/
                
        //method-3
        return view("about",[
                'name'=>$name,
                "age"=>$age
            ]);
    }
}
