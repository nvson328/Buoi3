<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Closure;
use Illuminate\Http\Request;

class Buoi3Controller extends Controller
{
    public function index(request $request){
        // $name = $request->session()->get('name');
        // dd($name);
        // //return view('buoi3');
        return ('donal trump');
    }
    public function create(){
        
        return redirect('/list')->with('status','Create Success!!!');
    }
    
}
