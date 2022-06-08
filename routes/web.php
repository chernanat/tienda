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
    return view('auth.loggin');
});

Route::get('/login', function () {
    return view('auth.loggin');
});

Route::get('/registro',function () {
    return view('auth.registro');
});

Route::get('/home',function () {
    return view('home');
});
    
Route::post('/insertar',[\App\Http\Controllers\UserController::class,'store']);

Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);
