<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', 'MainController@index')->name('home');
Route::get('/login' , 'MainController@loginPage')->name('login');
Route::get('/logout', 'MainController@logout')->name('logout');
Route::post('/login', 'MainController@login')->name('userLogin');
Route::get('/users', 'UserController@show')->name('allUsers');
Route::get('/users/profile/{user_id}', 'UserController@profile')->name('profile');
Route::post('/users/addUser','UserController@add_user')->name('adduser');
Route::get('/users/addUser', 'UserController@get_add_user')->name('getAddUser');
Route::post('/users/updateUser','UserController@update_user')->name('updateUser');
Route::get('/users/updateUser/{user_id}', 'UserController@get_update_user')->name('getUpdateUser');

