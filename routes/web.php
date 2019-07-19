<?php

/**
 * Application routes.
 */
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', ['custom-template', 'uses' => 'PageController@custom_template']);