<?php

/*
Plugin Name: My Theme
Plugin URI: https://example.com/my-theme
Description: Custom WordPress theme
Version: 1.0.0
Author: Your Name
Author URI: https://example.com
Text Domain: my-theme
*/

function my_theme_enqueue_scripts() {
    // Enqueue theme stylesheets
    wp_enqueue_style( 'my-theme-style', plugin_dir_url( __FILE__ ) . 'css/style.css' );

    // Enqueue theme scripts
    wp_enqueue_script( 'my-theme-script', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

function my_theme_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu',
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// Include template files
function my_theme_template_include( $template ) {
    if ( is_home() || is_front_page() ) {
        $template = plugin_dir_path( __FILE__ ) . 'templates/index.php';
    } elseif ( is_single() ) {
        $template = plugin_dir_path( __FILE__ ) . 'templates/single.php';
    } elseif ( is_archive() ) {
        $template = plugin_dir_path( __FILE__ ) . 'templates/archive.php';
    }
    return $template;
}
add_filter( 'template_include', 'my_theme_template_include' );