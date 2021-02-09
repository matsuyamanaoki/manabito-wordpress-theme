<?php
function theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );

	register_nav_menus( array(
		'global' => 'Global Menu'
	) );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_styles() {
	$version = date( 'YmdGis' );
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/normalize.css', array(), null );
	wp_enqueue_style( 'bxslider-style', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array( 'theme-reset' ), null );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/style.css', array( 'bxslider-style' ), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'theme_pagetop', get_template_directory_uri() . '/js/pagetop.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'theme_slider', get_template_directory_uri() . '/js/slider.js', array( 'bxslider' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
