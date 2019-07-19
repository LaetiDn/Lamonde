<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */


/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

/*** Front page ***/
//Route::get('page', function () {
//    return view('pages.custom-page');
//});
//Route::get('/', ['custom-template', 'uses' => 'PageController@custom_template']);
//Route::get('page', ['custom-template', 'uses' => 'PageController@custom_template']);
//Route::any('front', 'PagesController@index');

/*** Page avec un template ***/
//Route::get('template', ['custom-template', 'uses' => 'PagesController@custom_template']);


//Route::get('template', ['booking', 'uses' => 'PagesController@booking']);
//Route::any('template', ["menu" , 'uses' => 'PagesController@menu']);
//Route::any('template', ["contact" , 'uses' => 'PagesController@contact']);
//Route::any('template', ["gallery" , 'uses' => 'PagesController@gallery']);

//POSTS
//Route::any('template', ["events" , 'uses' => 'PagesController@posts']);


//Route::any('template', ["posts" , 'uses' => 'PagesController@posts']);

//Route::any('template', ["news" , 'uses' => 'PagesController@news']);
//Route::any('single', ['uses' => 'PagesController@single_news']);
//
//Route::any('template', ["events" , 'uses' => 'PagesController@events']);
//Route::any('single', ["event" , 'uses' => 'PagesController@single_event']);




/** Non fonctionnel **/
/*** Post Archive  ***/
//Route::any('archive', ['uses' => 'PagesController@archive']);

/*** Archive de custom post type  ***/
//Route::get('postTypeArchive', ['cpt', 'uses' => 'PagesController@archive']);

/*** Single custom post type ***/
// Si vous Polylang est activer, soyez sur de permettre la traduction des custom post type
// Languages -> settings -> Custom post types and Taxonomies
//Route::any('singular', ['cpt' , 'uses' => 'PagesController@single_cpt']);

/*** Page 404 fait avec l'option page  ***/
//Route::get('404', ['uses' => 'PagesController@page_404']);








