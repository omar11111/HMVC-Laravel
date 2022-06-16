<?php

use Customers\Http\Controllers\backend\Customers;
use Customers\Http\Controllers\frontend\Customers as FrontendCustomers;
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

Route::prefix("backend")->as('Admin.')->group(function () {
    Route::get('/user', [Customers::class, 'index'])->name('user');
});

Route::prefix("frontend")->group(function () {
    Route::get('/user', [FrontendCustomers::class, 'index']);
});

// Route::get('/user', [Customers::class, 'index']);

// Route::get('/users', [FrontendCustomers::class, 'index']);
