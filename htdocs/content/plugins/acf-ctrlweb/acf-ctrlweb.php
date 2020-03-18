<?php

/**
 * Plugin Name: ACF Style
 * Plugin URI: http://ctrlweb.ca
 * Description: Style ACF fields.
 * Version: 1.0.0
 * Author: Ctrlweb
 * Author URI: http://framework.themosis.com/
 */



function wpdocs_enqueue_acf_style() {
    wp_register_style( 'custom_wp_admin_css', plugins_url() . '/acf-ctrlweb/style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );

    wp_register_style( 'page_loader_css', plugins_url() . '/acf-ctrlweb/page-loader.css', false, '1.0.0' );
    wp_enqueue_style( 'page_loader_css' );
}

add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_acf_style' );

function wpdocs_enqueue_script() {
    wp_register_script( 'custom_wp_admin_js', plugins_url() . '/acf-ctrlweb/script.js', false, '1.0.0' );
    wp_enqueue_script( 'custom_wp_admin_js' );
}

add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_script' );


function myplugin_register_settings() {
    add_option( 'myplugin_option_name', 'This is my option value.');
    register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
}
add_action( 'admin_init', 'myplugin_register_settings' );
