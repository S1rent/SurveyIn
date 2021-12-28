<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
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

    Route::middleware('creator.check')->group(function () {
        Route::get('/creator/home', [AuthController::class, 'getCreatorHomePage']);
        Route::get('/creator/profile', [ProfileController::class, 'getCreatorProfilePage']);
        Route::get('/creator/create-survey', [SurveyController::class, 'getCreatorCreateSurveyPage']);
        Route::get('/creator/survey-list', [SurveyController::class, 'getCreatorSurveyListPage']);
        Route::get('/creator/create-thread', [SurveyController::class, 'getCreatorCreateThreadPage']);
        Route::get('/creator/survey-detail', [SurveyController::class, 'getCreatorSurveyDetailPage']);
        Route::get('/creator/respondent-answer', [SurveyController::class, 'getCreatorRespondentAnswer']);
        Route::get('/creator/add-choice-question', [SurveyController::class, 'getCreatorAddChoiceQuestionPage']);
        Route::get('/creator/add-scale-question', [SurveyController::class, 'getCreatorAddScaleQuestionPage']);
        Route::get('/creator/forum', [SurveyController::class, 'getCreatorForumPage']);
    });

    Route::middleware('respondent.check')->group(function () {
        Route::get('/respondent/home', [AuthController::class, 'getRespondentHomePage']);
        Route::get('/respondent/profile', [ProfileController::class, 'getRespondentProfilePage']);
    });
});

