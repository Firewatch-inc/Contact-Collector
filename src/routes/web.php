<?php

Route::get('/', 'Pages\IndexPageController@index')->name('index');
Route::get('/ltables', 'Pages\IndexPageController@ltables')->name('ltables');

Route::resource('/contacts', 'CRUD\ContactController');
Route::get('contacts/{id}', 'CRUD\ContactController@destroy')->name('contact.destroy');

Route::resource('/categories', 'CRUD\CategoryController');


Route::get('lang/{lang}', [ 'as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
