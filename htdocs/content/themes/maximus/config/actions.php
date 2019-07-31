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



//function custom_recaptcha_enqueue_scripts() {
//
//    if(pll_current_language() == 'en'){
//        $lang = 'en';
//    }else{
//        $lang = 'fr-CA';
//    }
//    wp_deregister_script( 'google-recaptcha' );
//
//    $url = 'https://www.google.com/recaptcha/api.js';
//    $url = add_query_arg( array(
//        'onload' => 'recaptchaCallback',
//        'render' => 'explicit',
//        'hl' => $lang ), $url );
//
//    wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
//}
//
//add_action( 'wpcf7_enqueue_scripts', 'custom_recaptcha_enqueue_scripts', 11 );


function get_excerpt($post){
    //$excerpt = get_the_content();
    $excerpt = $post;
    //$excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 130);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    //$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
    $excerpt = $excerpt.'[...]';
    return $excerpt;
}

//Pour plugin instagramme
add_action( 'wp_enqueue_scripts', 'sb_instagram_scripts_force_enqueue', 99 );
function sb_instagram_scripts_force_enqueue() {
    //Enqueue the script to make it available on every page
    wp_enqueue_script( 'sb_instagram_scripts' );
}


Action::remove('init', ['WC_Template_Loader', 'init'], 10);

