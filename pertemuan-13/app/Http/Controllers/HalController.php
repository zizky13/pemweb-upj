<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalController extends Controller
{
    public function showHome(){
        return view('layouts/home');
    }
    
    public function showAbout(){
        return view('layouts/about');
    }

    public function showContact(){
        return view('layouts/contact');
    }
}
