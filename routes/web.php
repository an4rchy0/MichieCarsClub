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
    return view('Page.Home');
});
Route::get('/regis', function(){
    return view('Page.Regis');
});
Route::get('/prds', function(){
    return view('Page.ProductAll');
});
Route::get('/ppd', function(){
    return view('Page.prevProduc');
});

Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/login', function() {
    return view('Page.Login'); // Gantilah dengan tampilan login Anda
})->name('loginPage');
