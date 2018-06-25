<?php

Route::get('/', 'Pages\IndexPageController@index')->name('index');
Route::get('/add', 'Pages\IndexPageController@add')->name('add');
Route::get('/list', 'Pages\IndexPageController@list')->name('list');

