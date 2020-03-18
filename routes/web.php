<?php

/**
 * Application routes.
 */


Route::any('page', ['uses' => 'PageController@custom_template']);
Route::any('template', ['menu', 'uses' => 'PageController@menu']);

//ARCHIVE PAGES
//Route::get('template', ['post-archive', 'uses' => 'PageController@archive_news']);

Route::any('single', ['uses' => 'PageController@single_news']);


Route::get('404', ['uses' => 'PageController@page_404']);
