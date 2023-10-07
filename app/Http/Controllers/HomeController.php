<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function teacherHome(){
        return view('teacher.homeForAdmin');
    }
    public function userHome(){
        return view('student.homeForUser');
    }
    public function TAHome(){
        return view('TA.homeForTA');
    }
   
    
    

}
