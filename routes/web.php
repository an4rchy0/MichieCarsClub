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
Route::get('/addc/{userId}', function($userId) {
    return view('Page.adm.admAdd', compact('userId'));
})->name('addc')->middleware('auth');

Route::get('/buyPd/{id}/{ide}', [UserController::class, 'show'])->name('pd.show')->middleware('auth');

Route::post('/PrdStore', [UserController::class, 'store']);

Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/login', function() {
    return view('Page.adm.admLog');
})->name('login');

Route::post('/logout', function () { 
    Auth::logout(); 
    session()->flush(); 
    return redirect('/'); 
})->name('logout');