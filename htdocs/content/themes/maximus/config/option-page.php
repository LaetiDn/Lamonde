<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'theme-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title'=>'',
        'menu_title'=>'Customize',
        'menu_slug'=>'customize',
        'parent_slug'	=> 'theme-options',
        'icon_url' => 'dashicons-admin-customizer',
    ));



    acf_add_options_sub_page(array(
        'page_title'=>'',
        'menu_title'=>'Company Informations',
        'menu_slug'=>'company-informations',
        'parent_slug'	=> 'theme-options',
        'icon_url' => 'dashicons-info',
    ));
    acf_add_options_sub_page(array(
        'page_title'=>'Google map',
        'menu_title'=>'Goole map',
        'menu_slug'=>'google-map',
        'parent_slug'	=> 'theme-options',
        'icon_url' => 'dashicons-flag',
    ));
    acf_add_options_sub_page(array(
        'page_title'=>'Page 404',
        'menu_title'=>'Page 404',
        'menu_slug'=>'page-404',
        'parent_slug'	=> 'theme-options',
        'icon_url' => 'dashicons-flag',
    ));
    acf_add_options_sub_page(array(
        'page_title'=>'Page Loader',
        'menu_title'=>'Page Loader',
        'menu_slug'=>'page-loader',
        'parent_slug'	=> 'theme-options',
        'icon_url' => 'dashicons-flag',
    ));
//    acf_add_options_sub_page(array(
//        'page_title'=>'Add Scripts',
//        'menu_title'=>'Add Scripts',
//        'menu_slug'=>'add-scripts',
//        'parent_slug'	=> 'theme-options',
//        'icon_url' => 'dashicons-chart-area',
//    ));

}

////Feuille de style personalisé pour la Option page ainsi qu'un petit script JS pour copier dans le clipboard du text lorsqu'on click dessus

function wpdocs_enqueue_custom_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/dist/css/acf-instruction.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );

    //wp_enqueue_script('copyToClipBoard-js', get_stylesheet_directory_uri().'/dist/js/copyToClipBoard.js');
}

add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );
