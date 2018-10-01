<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/minerals', 'MineralController@index')->name('mineral.index');

Route::get('/minerals/add', 'MineralController@create')->name('mineral.create');

Route::get('/minerals/edit/{mineral}', 'MineralController@edit')->name('mineral.edit');

Route::post('/minerals', 'MineralController@store')->name('mineral.store');

Route::put('/minerals/{mineral}', 'MineralController@update')->name('mineral.update');

Route::delete('/minerals/{mineral}', 'MineralController@destroy')->name('mineral.destroy');

Route::get('/minerals/{mineral}', 'MineralController@show')->name('mineral.show');

Route::post('/search', 'ChemicalElementController@number')->name('chemical.number');

Route::post('/searchResult', 'ChemicalElementController@search')->name('chemical.search');

Route::get('/profile', 'UserController@index')->name('user.profile');

Route::put('/profile/result', 'UserController@update')->name('user.update');

Route::post('/profile/avatar', 'AvatarController@upload')->name('avatar.upload');