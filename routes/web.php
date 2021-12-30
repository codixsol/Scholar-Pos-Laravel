<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/verify/account/{id}',[UserController::class,'verify_account'])->name('verify.account');
Route::get('/forgot/password/{id}',[UserController::class,'forgot_password'])->name('forgot.password');
Route::post('/forgot/save',[UserController::class,'forgot_save'])->name('forgot.save');
