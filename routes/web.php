<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('main');
});
Route::get('dashboard', [MyAuthController::class, 'dashboard']); 
Route::get('login', [MyAuthController::class, 'index'])->name('login');
Route::post('custom-login', [MyAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [MyAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [MyAuthController::class, 'customRegistration'])
    ->name('register.custom'); 
Route::get('signout', [MyAuthController::class, 'signOut'])->name('signout');
