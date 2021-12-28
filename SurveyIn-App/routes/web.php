<?php

use App\Http\Controllers\AuthController;
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


Route::get('/login', [AuthController::class, 'getLoginPage']);
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/logout', [AuthController::class,'logoutProcess'])->name('logout.process');

Route::get('/register', [AuthController::class, 'getRegisterPage']);
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');

Route::middleware('login.check')->group(function () {
    Route::get('/finishup', [AuthController::class, 'getFinishProfilePage']);
    Route::post('/finishup', [AuthController::class, 'finishUpProcess'])->name('finishup.process');

    Route::get('/creator/home', [AuthController::class, 'getCreatorHomePage']);
    Route::get('/respondent/home', [AuthController::class, 'getRespondentHomePage']);
});

