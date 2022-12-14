<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\cardcontroller;


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





Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
Session::forget('user');
    return redirect('login');
});
Route::post("/login",[usercontroller::class,'login']);
Route::get("/product",[productcontroller::class,'index']);
Route::post("/card",[cardcontroller::class,'card']);


