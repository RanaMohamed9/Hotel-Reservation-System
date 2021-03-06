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
Route::get('/room', function () {
    return view('roomuser');
});
Route::get('/roomsingle', function () {
    return view('rooms-single');
});
Route::get('/booking', function () {
    return view('booking');
});

Route::resource('rooms','RoomsController');
Route::resource('view_users','Usercontroller');



Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'UserController@edit')->name('edituser');
Route::post('/edit', 'UserController@update')->name('update');
Route::get('/password', 'UserController@passwordEdit')->name('password');
Route::post('/password', 'UserController@passwordUpdate')->name('passwordupdate');
Route::middleware(['auth','admincheck'])->group(function (){ Route::get('/admin', 'HomeController@usersview')->name('usersview'); });
Route::get('/booking', 'UserController@book')->name('book');
Route::post('/reserve', 'UserController@reserve1')->name('reserve1');
Route::get('/adminbooking', 'UserController@index2')->name('index2');
Route::get('/booking-details', 'UserController@userdetails')->name('userdetails');
Route::get('/click_delete/{reserve_id}', 'UserController@delete');

