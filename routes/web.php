<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/home', HomeController::class);

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/profile', [UserController::class,'show'])->name('profile');
Route::get('show/{id}', [HomeController::class,'show'])->name('show');
Route::get('/search', [HomeController::class,'search']);
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

