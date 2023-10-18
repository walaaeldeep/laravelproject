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



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/homee',[App\Http\Controllers\PagesController::class,'index'])->name('homee');
Route::get('/index',[App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('/super',[App\Http\Controllers\SuperController::class,'index'])->name('super');
Route::get('/shop',[App\Http\Controllers\ShopController::class,'index'])->name('shop');



require __DIR__.'/auth.php';
