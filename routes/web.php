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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/contact', function () {
    return view('contact');
});
<<<<<<< HEAD
Route::get('/room', function () {
    return view('roomuser');
});
Route::get('/roomsingle', function () {
    return view('rooms-single');
});
=======

Route::resource('rooms','RoomsController');


>>>>>>> 93218d5e7f2a852ac72e3c3ffc0c6998a785fffb

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'UserController@edit')->name('edit');
Route::post('/edit', 'UserController@update')->name('update');
Route::get('/password', 'UserController@passwordEdit')->name('password');
Route::post('/password', 'UserController@passwordUpdate')->name('passwordupdate');
Route::middleware(['auth','admincheck'])->group(function (){ Route::get('/admin', 'HomeController@usersview')->name('usersview'); });
