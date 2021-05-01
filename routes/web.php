<?php

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

Route::get('/', 'FrontController@index');
Route::get('/post-front', 'FrontController@post')->name('post-front');



Route::get('/dashboard', 'DashboardController@index');


Route::get('/pdf', 'TransactionController@generatePDF')->name('print-transaction');
Route::get('/pdf-out', 'TransactionoutController@generatePDF')->name('print-transaction-out');




Route::resource('pelanggan', 'PelangganController');
Route::resource('paket', 'PaketController');
Route::resource('transaction', 'TransactionController');
Route::resource('transaction-out', 'TransactionoutController');
Route::resource('post', 'postController');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
