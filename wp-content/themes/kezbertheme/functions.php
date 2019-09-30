<?php
function kezbertheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'kezbertheme', get_stylesheet_uri(), $dependencies ); 
}
function kezbertheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.3.1', true );
}
function kezbertheme_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'wp_enqueue_scripts', 'kezbertheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'kezbertheme_enqueue_scripts' );
add_action( 'after_setup_theme', 'kezbertheme_wp_setup' );
?>