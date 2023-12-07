<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateProfileController;
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
    Route::controller(BeasiswaController::class)->group(function(){
        Route::get('/home', 'show')->name('home');
    });

    Route::controller(ChangePasswordController::class)->group(function(){
        Route::get('/change-password', 'index')->name('change-password');
        Route::post('/change-password', 'changePassword')->name('update-password');
    });
    
    Route::controller(UpdateProfileController::class)->group(function(){
        Route::get('/account-settings', 'index')->name('account-settings');
        Route::post('/account-settings', 'update')->name('update-profile');
    });
});