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

Route::get('/wedding/{id}', 'WeddingController@show')->name('weddingShow');

Route::get('/invite/{wedding}', 'InviteeController@invite');
Route::post('/create/{wedding}', 'InviteeController@create')->name('createInvite');
Route::get('/invitee/{wedding}/{id}', 'InviteeController@edit')->name('editInvitee');
Route::post('/invitee/{weddint}/{id}', 'InviteeController@update');
