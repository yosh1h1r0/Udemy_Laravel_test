<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('shops/index', [ShopController::class, 'index']);



Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function () {
    Route::get('index', [ContactFormController::class, 'index'])->name('contact.index');
    Route::get('create', [ContactFormController::class, 'create'])->name('contact.create');
    Route::post('create', [ContactFormController::class, 'store'])->name('contact.store');
    Route::get('show/{id}', [ContactFormController::class, 'show'])->name('contact.show');
    Route::get('edit/{id}', [ContactFormController::class, 'edit'])->name('contact.edit');
    Route::post('update/{id}', [ContactFormController::class, 'update'])->name('contact.update');
    Route::post('destroy/{id}', [ContactFormController::class, 'destroy'])->name('contact.destroy');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
