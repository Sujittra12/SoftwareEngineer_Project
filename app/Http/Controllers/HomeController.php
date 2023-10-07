<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function teacherHome(){
        return view('homeForAdmin');
    }
    public function userHome(){
        return view('homeForUser');
    }
    public function TAHome(){
        return view('homeForTA');
    }
    public function adduser(){
        return view('adduser');
    }
    
    

}
