<?php

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
    return redirect('/login');
});

Route::get('home',function (){
    return view('site/home');
});

Route::get('/admin/home',[\App\Http\Controllers\AdminController::class,'viewHome']);
Route::get('/admin/product',[\App\Http\Controllers\AdminController::class,'viewProduct']);
Route::get('/login',[\App\Http\Controllers\LoginCotroller::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\LoginCotroller::class,'login']);
Route::post('/logout',[\App\Http\Controllers\LoginCotroller::class,'logout']);
