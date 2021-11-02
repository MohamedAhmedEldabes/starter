<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    //
    public function getIndex(){
        $data =[1 ,"mohamed", 23];
        // $data['id'] = 5;
        // $data['name'] = "mohamed";
        // $data['age'] = 21;
        return view("welcome",compact("data"));
    }
    public function getLandingPage(){
        return view('landing');
    }
}
