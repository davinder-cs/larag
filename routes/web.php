<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function ()
{
    return view('dashboard');
});

Route::get('dashboard', [MyAuthController::class , 'dashboard']);

Route::get('login', [MyAuthController::class , 'index'])->name('login');
Route::post('login', [MyAuthController::class , 'postLogin'])
    ->name('login.post');

Route::get('register', [MyAuthController::class , 'register'])
    ->name('register');
Route::post('register', [MyAuthController::class , 'postRegister'])
    ->name('register.post');

Route::get('logout', [MyAuthController::class , 'logOut'])
    ->name('logout');

