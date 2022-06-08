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

//vistas
Route::get('/', function () {
    return view('login');
});

Route::get('/registro',function () {
    return view('registro');
});// Route::get('/registro' function(){

Route::get('/registro',function () {
    return view('registro');
    });

Route::get('/admin',function () {
    return view('admin');
    });
    
Route::post('/insertar',[\App\Http\Controllers\UserController::class,'store']);

// })