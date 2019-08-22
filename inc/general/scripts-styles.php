<?php

/**
 * Load theme assets
 */
function wcorl2019_load_theme_assets() {

	// Load main CSS file
	wp_enqueue_style( 'shi-styles', get_stylesheet_directory_uri() . '/css/build/main.min.css', NULL, '1.0.0', 'all' );

	// Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display:400,700&display=swap' );

	// Font Awesome
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/e05f5a77f7.js', NULL, NULL, false );

	// Load main JS file
	wp_enqueue_script( 'shi-scripts', trailingslashit( get_template_directory_uri() ) . 'js/scripts.js', array( 'jquery' ), NULL, true );
}
add_action( 'wp_enqueue_scripts', 'wcorl2019_load_theme_assets' );