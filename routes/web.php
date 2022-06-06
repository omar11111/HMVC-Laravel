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

Route::get('/hmvc', function () {
    return view('welcome');
});


Route::get('/user', [Customers::class, 'index']);

Route::get('/له', [FrontendCustomers::class, 'index']);
