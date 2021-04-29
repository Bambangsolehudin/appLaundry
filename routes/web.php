<?php

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
    return view('pages.admin.dashboard');
});

Route::resource('pelanggan', 'PelangganController');
Route::resource('paket', 'PaketController');
Route::resource('transaction', 'TransactionController');
Route::resource('transaction-out', 'TransactionoutController');