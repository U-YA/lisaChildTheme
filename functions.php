<?php
//
// Your code goes below!
//
if (class_exists('Woocommerce')) {
	require_once( get_stylesheet_directory() . '/woocommerce/config.php');
}
add_action( 'wp_enqueue_scripts', 'woss_artday_child_theme' , 11);
function woss_artday_child_theme() {
    wp_enqueue_style( 'artday-style', get_template_directory_uri() . '/style.css' );
}

/**
 * WooCommerce support
 */

add_action( 'after_setup_theme', 'remove_pgz_theme_support', 100 );
function remove_pgz_theme_support() { 
remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
}
