<?php

Route::get('/', 'Pages\IndexPageController@index')->name('index');
Route::get('/add', 'Pages\IndexPageController@add')->name('add');
Route::get('/list', 'Pages\IndexPageController@list')->name('list');

Route::resource('/contacts', 'CRUD\ContactController');
Route::get('contacts/{id}', 'CRUD\ContactController@destroy')->name('contact.destroy');