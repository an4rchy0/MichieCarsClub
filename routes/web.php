<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmController;

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
Route::get('/addpdII/{userId}', function($userId){
    return view('Page.addpdII', compact('userId'));
})->name('addpdII');

Route::get('/addpd', [UserController::class, 'showProfile'])->middleware('auth');
Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/login', function() {
    return view('Page.LoginAdm');
})->name('loginPage');