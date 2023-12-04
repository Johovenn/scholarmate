<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('landing');
})->name('landing');

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'index')->name('auth.register');
    Route::post('/register', 'register')->name('auth.saveRegister');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('auth.login');
    Route::post('/login', 'login')->name('auth.validate');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::middleware('auth.check')->group(function(){ 
    Route::get('/home', function(){
        return view('home');
    })->name('home');
});