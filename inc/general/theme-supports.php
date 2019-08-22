<?php

/**
 * Registers support for various WordPress features.
 */
function wcorl2019_supports() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Let WordPress manage the document title.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 200,
            'flex-width'  => true,
            'flex-height' => true,
            'header-text' => array(
                'site-title',
                'site-description',
            ),
        )
    );
}
add_action( 'after_setup_theme', 'wcorl2019_supports', 20 );