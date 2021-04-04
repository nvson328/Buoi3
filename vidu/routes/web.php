<?php

use App\Http\Controllers\Bai1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buoi3Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',[Buoi3Controller::class,'index'])->name('homepage');
Route::get('welcome', function () {
    return redirect()->route('homepage');
});
Route::get('/list',[Buoi3Controller::class,'index'])->middleware('check_age:16');
Route::get('create',[Buoi3Controller::class,'create'])->middleware('check_age:22');//lấy biến check_age so sánh với biến age trên url


//===================Bai1=====================
Route::get('home',[Bai1Controller::class,'home']);
Route::post('info',[Bai1Controller::class,'create'])->name('create');