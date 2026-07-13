<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* Theme Setup */
function simple_business_theme_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus( array(
        'primary_menu' => 'Primary Menu'
    ) );

}
add_action( 'after_setup_theme', 'simple_business_theme_setup' );


/* Load CSS */
function simple_business_enqueue_assets() {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

}

add_action( 'wp_enqueue_scripts', 'simple_business_enqueue_assets' );