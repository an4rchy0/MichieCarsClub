<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\UserController;

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
    return view('Page.index');
});
Route::get('/test', function () {
    return view('Page.home-02');
});
Route::get('/', [UserController::class, 'indexhm']);

//usr
Route::post('/loginus', [UserController::class, 'loginus'])->name('psuslogin');
Route::get('/profileus', [UserController::class, 'showProfileus'])->middleware('authus');
Route::get('/loginus', function() {
    return view('Page.us.usLog');
})->name('loginus');
Route::get('/regis', function(){
    return view('Page.us.register');
});
Route::post('/UsReg', [UserController::class, 'storeus']);
Route::get('/buyPd/{id}/{ide}', [UserController::class, 'show'])->name('pd.show')->middleware('authus');

//admin
Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/login', function() {
    return view('Page.adm.admLog');
})->name('login');

Route::get('/addc/{userId}', function($userId) {
    return view('Page.adm.admAdd', compact('userId'));
})->name('addc')->middleware('auth');
Route::get('/pd.del/{id}', [UserController::class, 'del'])->name('pd.del')->middleware('auth');
Route::post('/PrdStore', [UserController::class, 'store'])->middleware('auth');
Route::post('/upPD/{id}', [UserController::class, 'up'])->middleware('auth');

Route::post('/logout', function () { 
    Auth::logout(); 
    session()->flush(); 
    return redirect('/'); 
})->name('logout');