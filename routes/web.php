<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PaganteController@index') -> name('paganti-index');
Route::get('/pagante/{id}', 'PaganteController@show') -> name('pagante-show');

Route::get('/create/paganti', 'PaganteController@create') -> name('pagante-create');
Route::post('/create/paganti', 'PaganteController@store') -> name('pagante-store');

Route::get('/pagante/delete/{id}', 'PaganteController@destroy') -> name('pagante-destroy');

Route::get('/pagante/edit/{id}', 'PaganteController@edit') -> name('pagante-edit');
Route::post('/pagante/update/{id}', 'PaganteController@update') -> name('pagante-update');
