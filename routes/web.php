<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ContactController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'saveContact'])->name('contact.save');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authenticate'])->name('login.authenticate'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('user.registration');
Route::post('registration', [CustomAuthController::class, 'createUser']);
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('products/{slug}', [HomeController::class, 'productDetails'])->name('product.detail');

Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', [DashBoardController::class, 'index']); 
});
