<?php

/**
 * Application routes.
 */
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('page', ['uses' => 'PageController@custom_template']);