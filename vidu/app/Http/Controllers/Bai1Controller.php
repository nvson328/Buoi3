<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai1Controller extends Controller
{
    public function home(){
        return view('home');
    }
    public function create(Request $request){
        $slug = $request->input('slug');
        $title = $request->input('title');
        $description = $request->input('description');

        if($slug == '' || $title == '' || $description==''){
        
            $alert='Chưa điền đủ thông tin';

            return redirect()->back()->with('alert',$alert);

        }
        else{
            return view('info')->with([
                'slug'=> $slug,
                'title'=> $title,
                'description'=> $description,
                ]);
            
        }
    }
}
