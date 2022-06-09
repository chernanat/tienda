<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

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

Route::get('/admin',function () {
    $product = Product::all();
    $category = Category::all();
    $category2 = Category::all();
    return view('admin',compact('category','product','category2'));
});
    
Route::post('/insertar_producto',[\App\Http\Controllers\ProductController::class,'store']);

Route::post('/editar_producto/{id}',[\App\Http\Controllers\ProductController::class,'update']);

Route::get('/editar_producto/{id}',[\App\Http\Controllers\ProductController::class,'edit']);

Route::post('/insertar_categoria',[\App\Http\Controllers\CategoryController::class,'store']);

Route::post('/editar_categoria/{id}',[\App\Http\Controllers\CategoryController::class,'update']);

Route::get('/editar_categoria/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);

Route::get('/eliminar_producto/{id}',[\App\Http\Controllers\ProductController::class,'delete']);

Route::get('/eliminar_categoria/{id}',[\App\Http\Controllers\CategoryController::class,'delete']);

Route::post('/insertar',[\App\Http\Controllers\UserController::class,'store']);

Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);