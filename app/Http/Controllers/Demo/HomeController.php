<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function save(){
        return view('home');
    }

    public function edit(){
        return view('About');
    }

    public function delete(){
        return view('Services');
    }

    
}
