<?php

/**
 * Application routes.
 */

Route::get('front', ['uses' => 'PageController@index']);
Route::any('page', ['uses' => 'PageController@custom_template']);

Route::any('template', ['menu', 'uses' => 'PageController@menu']);

Route::get('template', ['post-archive', 'uses' => 'PageController@post_archive']);
Route::any('single', ['uses' => 'PageController@single_news']);


Route::get('404', ['uses' => 'PageController@page_404']);


//WOOCOMERCE
Route::any('shop', ['uses' => 'PageController@shop']);
