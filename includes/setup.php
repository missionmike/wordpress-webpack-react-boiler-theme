<?php

/**
 * Basic Theme requirements
 */
add_theme_support( 'post-thumbnails' );



function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );



function register_my_menu() {
	global $$WPWP_THEME_SLUG;

	register_nav_menu( 'primary', __( 'Primary Menu', $WPWP_THEME_SLUG ) );
	register_nav_menu( 'footer', __( 'Footer Menu', $WPWP_THEME_SLUG ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );



/**
 * Register Custom Navigation Walker
 * 
 * @link https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 */
function register_navwalker(){
	require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
