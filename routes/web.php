<?php
/*
 * Home
 */
//Route::get('/', 'MyFormController@create');
Route::get('/', 'MyFormController@create');

//Route::post('/myform', 'MyFormController@store');

Route::post('/myform', 'MyFormController@store');

Route::get('/myform/create', 'MyFormController@create');