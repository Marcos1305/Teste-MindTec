<?php


Route::get('/', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/novo', 'ClienteController@create')->name('cliente.create');
Route::post('/cliente/novo', 'ClienteController@store')->name('cliente.create');
Route::get('/cliente/editar/{id}', 'ClienteController@show')->name('cliente.show');
Route::post('/cliente/update', 'ClienteController@update')->name('cliente.update');
Route::get('/api/tipos-contatos', 'ApiController@tiposContatos');
