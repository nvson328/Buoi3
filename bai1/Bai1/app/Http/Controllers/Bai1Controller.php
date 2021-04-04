<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai1Controller extends Controller
{
    public function create(){
        return view('create');
    }

    public function info(Request $request){
        $slug = $request->input('slug');
        $title = $request->input('title');
        $description = $request->input('description');
        if($slug == '' || $title == '' || $description == ''){
            
            $alert='Điền thiếu thông tin!!!';
            return redirect()->back()->with('alert',$alert);

        }
        else{
            return view('info',compact('slug','title','description'));
        }
    }
}
