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
    return view('welcome');
});

Route::get('/registro',function () {
    return view('registro');
});// Route::get('/registro' function(){

Route::get('/login',function () {
    return view('login');
    });

Route::get('/registro',function () {
        return view('registro');
        });
    
Route::post('/insertar',[\App\Http\Controllers\UserController::class,'store']);

// })