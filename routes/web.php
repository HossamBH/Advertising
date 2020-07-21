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


############################ Begin DashBoard ############################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function(){

	Route::group(['prefix' => 'ad'], function(){
		Route::get('all', 'AdController@index')->name('ad.all');
		Route::get('create', 'AdController@create')->name('ad.create');
		Route::post('store', 'AdController@store')->name('ad.store');
		Route::get('show/{id}', 'AdController@show')->name('ad.show');
		Route::get('edit/{id}', 'AdController@edit')->name('ad.edit');
		Route::post('update', 'AdController@update')->name('ad.update');
		Route::get('/delete/{id}', 'AdController@destroy')->name('ad.destroy');
	});
	Route::group(['prefix' => 'time'], function(){
		Route::get('index', 'TimeController@index')->name('time.index');
		Route::get('create', 'TimeController@create')->name('time.create');
		Route::post('store', 'TimeController@store')->name('time.store');
		Route::get('edit/{id}', 'TimeController@edit')->name('time.edit');
		Route::post('update', 'TimeController@update')->name('time.update');
	});
});

############################ End Dashboard ############################

############################ Begin Website ############################

Route::group(['namespace' => 'Web'], function(){

	Route::get('/', 'AdController@index')->name('ad.index');
	Route::get('display', 'AdController@display')->name('ad.display');
	Route::post('viewers', 'AdController@viewers')->name('ad.viewers'); // count viewer doesn't work

});
############################ End Website ############################