<?php

/**
 * Theme Slug
 */
global $WPWP_THEME_SLUG;
$WPWP_THEME_SLUG = 'wordpress-webpack-react-boiler';


/**
 * Site Owner - appears in Copyright message, etc.
 */
global $WPWP_SITE_OWNER;
$WPWP_SITE_OWNER = 'Michael R. Dinerstein';


/**
 * Blank GIF in Base64 format; for use in lazy-load functions to pre-fill the src attribute
 */
global $WPWP_GIF;
$WPWP_GIF = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';


/**
 * Store template_directory_uri value in global to reduce need to call the function
 */
global $WPWP_TEMPLATE_URI;
$WPWP_TEMPLATE_URI = get_template_directory_uri();


/**
 * Store public images URI value in global to reduce need to call the function
 */
global $WPWP_TEMPLATE_IMAGES_URI;
$WPWP_TEMPLATE_IMAGES_URI = $WPWP_TEMPLATE_URI . '/assets/public/images';

/**
 * Got more globals? Include them here!
 */
