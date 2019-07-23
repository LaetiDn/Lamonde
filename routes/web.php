<?php

/**
 * Application routes.
 */
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('front', ['uses' => 'PageController@index']);

//Route::any('template', ['custom-template', 'uses' => 'PageController@custom_template']);
//Route::any('template', ['default-template', 'uses' => 'PageController@custom_template']);
Route::any('page', ['uses' => 'PageController@custom_template']);

Route::any('template', ['post-archive', 'uses' => 'PageController@post_archive']);
//Route::any('archive', ['uses' => 'PagesController@post_archive']);


Route::get('404', ['uses' => 'PageController@page_404']);



