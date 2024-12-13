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
    return view('Page.index');
});

Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::middleware('auth')->group(function () {
    Route::get('/addc', function() {
        return view('Page.adm.admAdd');
    });
});
Route::get('/login', function() {
    return view('Page.adm.admLog');
})->name('login');
