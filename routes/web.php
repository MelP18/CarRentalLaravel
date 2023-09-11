<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('index');
});


Route::controller(CarController::class)->middleware('auth')->group(function(){
    Route::get('/car-lists', 'showcarlists')->name('showCarLists');
});

Route::controller(UserController::class)->prefix('authentification')->group(function(){
    Route::get('/registration', 'signup')->name('signUp');
    Route::post('/send-registration', 'sendsignup')->name('sendSignUp');
    Route::get('/send-registration-mail/{email}', 'sendsignupmail')->name('sendSignUpMail');
    Route::get('/connection', 'login')->name('logIn');
    Route::post('/send-connection', 'sendlogin')->name('sendLogIn');
    Route::get('/modify-password-verification-email', 'verifyemail')->name('verifyEmail');
    Route::post('/modify-password-send-email', 'sendforverifyemail')->name('sendForVerifyEmail');
    Route::get('/modify-password-modify-password/{email}', 'modifypassword')->name('modifyPassword');
    Route::post('/modify-password-modify-send-password/{email}', 'sendformodifypassword')->name('sendForModifyPassword');
});
