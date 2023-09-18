<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;

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

Route::put('updated/{id}',[RentalController::class,"updated"])->name("updated");
Route::get('edit/{id}',[RentalController::class,"modify"])->name("rentalEdit");

Route::get('/', function () {
    return view('index');
});




Route::controller(CategoryController::class)->prefix('car')->group(function(){
    Route::get('/add-category-car', 'addcategorycar')->name('addCategoryCar');
    Route::post('/send-category-car', 'sendcategorycar')->name('sendCategoryCar');
    Route::get('/modify-category-car', 'modifycategorycar')->name('modifyCategoryCar');
    Route::post('/send-modify-category-car', 'sendmodifycategorycar')->name('sendModifyCategoryCar');
    Route::get('/delete-category-car', 'deletecategorycar')->name('deleteCategoryCar');
    Route::post('/send-delete-category-car', 'senddeletecategorycar')->name('sendDeleteCategoryCar');
});


Route::controller(BrandController::class)->prefix('brand')->group(function(){
    Route::get('/add-brand-car', 'addbrandcar')->name('addBrandCar');
    Route::post('/send-brand-car', 'sendbrandcar')->name('sendBrandCar');
    Route::get('/modify-brand-car', 'modifybrandcar')->name('modifyBrandCar');
    Route::post('/send-modify-brand-car', 'sendmodifybrandcar')->name('sendModifyBrandCar');
    Route::get('/delete-brand-car', 'deletebrandcar')->name('deleteBrandCar');
    Route::post('/send-delete-brand-car', 'senddeletebrandcar')->name('sendDeleteBrandCar');
});


Route::controller(ModalController::class)->prefix('model')->group(function(){
    Route::get('/add-modal-car', 'addmodalcar')->name('addModalCar');
    Route::post('/send-modal-car', 'sendmodalcar')->name('sendModalCar');
    Route::get('/modify-modal-car', 'modifymodalcar')->name('modifyModalCar');
    Route::post('/send-modify-modal-car', 'sendmodifymodalcar')->name('sendModifyModalCar');
    Route::get('/delete-modal-car', 'deletemodalcar')->name('deleteModalCar');
    Route::post('/send-delete-modal-car', 'senddeletemodalcar')->name('sendDeleteModalCar');
});


Route::controller(CarController::class)->prefix('car')->group(function(){

    Route::get('/car-lists', 'showcarlists')->name('showCarLists');
    Route::get('/add-car', 'addcar')->name('addCar');
    Route::post('/send-car-add', 'sendcaradd')->name('sendCarAdd');
    Route::get('/show-car/{id}', 'showcar')->name('showCar');
});

Route::controller(CustomerController::class)->middleware('auth')->prefix('customer')->group(function(){
    Route::get('/customer-lists', 'showcustomerlists')->name('showCustomerLists');
    Route::get('/add-Customer', 'addCustomer')->name('addCustomer');
    Route ::post ('/store-customer',"storecustomer")->name("storecustomer");
    Route::get('/update-Customer/{ids}', 'getcustomer')->name('getCustomer');
    Route::post('/customer-update/{ids}',"customerupdate")->name('customerUpdate');
    Route:: get('/custumer-profil/{id}',"showcustumer")->name("customerProfil");
    Route::get('customer-delete/{id}', "deletecustomer")->name('deleteCustomer');
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


Route::controller(RentalController::class)->prefix('rental')->group(function(){
   Route::get('/rental', 'rental')->name('rental'); 
   Route::get('/add-rentals', 'addRentals')->name('addRentals');
   Route::get('/show-car/{id}', 'show')->name('show');

Route ::post ('/store-rental',"storeRental")->name("storeRental");


});