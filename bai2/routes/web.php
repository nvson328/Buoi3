<?php

use App\Http\Controllers\Bai2Controller;
use Illuminate\Support\Facades\Route;

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
})->name('/');
Route::get('/admin',[Bai2Controller::class,'home'])->middleware('checklogin','checkrole:admin')->name('home');
Route::post('/admin',[Bai2Controller::class,'login']);
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/admin',[Bai2Controller::class,'homepage'])->middleware('checklogin')->name('homepage');