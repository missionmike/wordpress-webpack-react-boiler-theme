<?php

/**
 * JS and CSS includes
 * 
 * Replace $version with anything you'd like; dates are nice and easy
 * to track, but this could be anything unique.
 * 
 * The .min.js and .min.css files are compiled when webpack is watching the
 * installation - after saving any edits to any of the src files, new minified output
 * is generated (fairly quickly, depending on how complex your code is, and how beefy
 * your staging server is)
 */
function wpwp_reg_scripts() {

	global $WPWP_TEMPLATE_URI; 

	$version = '20200531';

	/**
	 * If production, cache script w/ ?v= parameter - otherwise force cache busting using time()
	 */
	$script_version = wpwpbp_is_production() ? $version : time();

	/**
	 * Enqueue Styles 
	 */
	wp_enqueue_style( 'style', $WPWP_TEMPLATE_URI . '/assets/public/css/main.min.css?v=' . $script_version );
	
	/**
	 * Enqueue main frontend scripts
	 * 
	 * React support:
	 * @link: https://javascriptforwp.com/adding-react-to-a-wordpress-theme-tutorial/
	 */
	wp_register_script( 'main', $WPWP_TEMPLATE_URI . '/assets/public/js/main.min.js', ['wp-element'], $script_version, true );
	wp_enqueue_script( 'main' );
		
	return 1;
}
add_action( 'wp_enqueue_scripts', 'wpwp_reg_scripts' );
