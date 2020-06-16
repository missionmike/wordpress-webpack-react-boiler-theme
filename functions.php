<?php
/**
 * Theme Name: WordPress Webpack React Boiler
 * 
 * @link https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/
 * 
 */

/**
 * Custom Post Type definitions
 */
include ( 'includes/load-cpt.php' );

/**
 * Custom Taxonomy definitions
 */
include ( 'includes/load-tax.php' );

/**
 * Global PHP variables
 */
include ( 'includes/globals.php' );

/**
 * Helper & utility functions
 */
include ( 'includes/helpers.php' );

/**
 * Theme and WP setup options
 */
include ( 'includes/setup.php' );

/**
 * Theme JS and CSS enqueue
 */
include ( 'includes/enqueue.php' );

/**
 * Deprecated shortcodes and functions to remove/clean. Once removed/cleaned, this include + file can be removed
 */
include ( 'includes/deprecated.php' );
