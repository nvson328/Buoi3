<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai2Controller extends Controller
{
    public function home(){
        return view('admin');
    }
    public function login(){
        return view('admin');
    }
    public function homepage(){
        return view('homepage');
    }
}
