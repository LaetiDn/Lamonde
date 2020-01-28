<?php

/**
 * Define WordPress actions for your theme.
 *
 * Based on the WordPress action hooks.
 * https://developer.wordpress.org/reference/hooks/
 *
 */
use Themosis\Support\Facades\Action;

// Move Yoast Meta Box to bottom
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


//Accept SVG in media library
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//Pour plugin instagramme
add_action( 'wp_enqueue_scripts', 'sb_instagram_scripts_force_enqueue', 99 );
function sb_instagram_scripts_force_enqueue() {
    //Enqueue the script to make it available on every page
    wp_enqueue_script( 'sb_instagram_scripts' );
}
