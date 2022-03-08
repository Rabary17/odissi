
<?php
/**
 * Theme functions and definitions
 *
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function odissi_enqueue_scripts() {
	 wp_enqueue_style('theme-style',get_stylesheet_directory_uri() . '/style.css','1.0.0');
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css','1.1');
    wp_enqueue_style( 'fontawesome', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css','1.1');
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js','1.1');
	wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js','1.1');
}
add_action( 'wp_enqueue_scripts', 'odissi_enqueue_scripts', 0 );


function odissi_menu() {
    register_nav_menu('menu-principale',__( 'menu principale' ));
  }
  add_action( 'init', 'odissi_menu' );

  function odissi_logo() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'odissi_logo', $defaults );
}

add_action( 'after_setup_theme', 'odissi_logo' );