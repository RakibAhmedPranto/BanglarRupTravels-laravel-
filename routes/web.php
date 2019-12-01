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



Route::get('/','PagesController@index')->name('index');
Route::get('/contact','PagesController@contact')->name('contact');


Route::get('/rooms','PagesController@rooms')->name('rooms');
Route::get('/rooms/{slug}','PagesController@show')->name('rooms.show');
Route::get('/search','PagesController@search')->name('search');
Route::post('/rooms/book','PagesController@book')->name('book');
Route::get('/create','PagesController@create')->name('create');



Route::group(['prefix' => 'admin'], function(){
	Route::get('/','AdminPagesController@index')->name('admin.index');

	Route::group(['prefix' => '/places'], function(){

	route::get('/create','AdminPlaceController@create')->name('admin.place.create');
	route::get('/edit/{id}','AdminPlaceController@edit')->name('admin.place.edit');
	Route::post('/store','AdminPlaceController@store')->name('admin.place.store');
	route::get('/','AdminPlaceController@index')->name('admin.places');
	Route::post('/edit/{id}','AdminPlaceController@update')->name('admin.place.update');
	Route::post('/delete/{id}','AdminPlaceController@delete')->name('admin.place.delete');

});

Route::group(['prefix' => '/hotels'], function(){
	route::get('/create','AdminHotelController@create')->name('admin.hotel.create');
	Route::post('/store','AdminHotelController@store')->name('admin.hotel.store');
	route::get('/','AdminHotelController@index')->name('admin.hotels');
	route::get('/edit/{id}','AdminHotelController@edit')->name('admin.hotel.edit');
	Route::post('/edit/{id}','AdminHotelController@update')->name('admin.hotel.update');
	Route::post('/delete/{id}','AdminHotelController@delete')->name('admin.hotel.delete');
});

	Route::group(['prefix' => '/rooms'], function(){

	Route::get('/','AdminRoomController@index')->name('admin.rooms');
	Route::get('/create','AdminRoomController@create')->name('admin.room.create');
	Route::get('/edit/{id}','AdminRoomController@edit')->name('admin.room.edit');

	Route::post('/store','AdminRoomController@store')->name('admin.room.store');
	Route::post('/room/edit/{id}','AdminRoomController@update')->name('admin.room.update');
	Route::post('/room/delete/{id}','AdminRoomController@delete')->name('admin.room.delete');

	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
