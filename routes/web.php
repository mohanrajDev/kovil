<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('dashboard', 'Dashboard\Controller@index')->name('dashboard');

Route::resource('donors', 'Donor\Controller');

Route::get('donors/{donor}/donations', 'Donor\Controller@donations')->name('donations');
Route::get('donors/{donor}/donation-form', 'Donor\Controller@donationForm')->name('donation-form');
Route::post('donors/{donor}/donate', 'Donor\Controller@donate')->name('donate');




