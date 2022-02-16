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
    return view('welcome');
});



Route::get('/users', function () {
    return view('users');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/update-profile', 'HomeController@updateprofile')->name('update-profile');

Route::get('/add-food', 'FoodController@addFood')->name('add-food');
Route::Post('/upload-food', 'FoodController@upload')->name('food.upload');

Route::get('/add-address', 'AddressController@addAddress')->name('address.add');
Route::Post('/upload-address', 'AddressController@uploadAddress')->name('address-upload');


Route::get('/add-complain', 'ComplainController@addComplain')->name('add-complain');
Route::Post('/upload-complain', 'ComplainController@uploadComplain')->name('complain.upload');

//
