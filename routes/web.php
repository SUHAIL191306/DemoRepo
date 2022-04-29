<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customersController;
use App\Http\Controllers\AuthController;

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

// Route For Dashboard
Route::get('/', function () {
    return view('dashboard');
});


Route::get('/customers', [customersController::class, 'view']);
Route::get('/customers/delete/{id}', [customersController::class, 'delete']);

// Adding New Customer Route
Route::view('add-customers','add-customers');
Route::post('add-customers', [customersController::class, 'add']);


//This is editing customer section
Route::get('/customers/update/{id}', [customersController::class, 'update']);
Route::post('edit', [customersController::class, 'change']);


// Ruotes For Login & Registration
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');