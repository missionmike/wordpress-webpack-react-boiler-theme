<?php

/**
 * Production environment check
 * 
 * Set $production_domain to the domain of your production site; this function checks
 * against that value - if the $_SERVER['HTTP_HOST'] value does not include the production 
 * domain, then the installation will assume this is a staging site.
 * 
 * @return boolean true if this installation is on the production domain
 */
function wpwpbp_is_production() {

	$production_domain = '';

	return ( strpos( $_SERVER['HTTP_HOST'], $production_domain ) !== false ) ? true : false;
}

/**
 * Return image from theme /images/ folder
 * 
 * @param string $filename
 * @param string $return_type Defaults to URL. Other option is local path in file system.
 * @return string $location URL or path
 */
function wpwpbp_get_image( $filename = '', $return_type = 'url' ) {

	if ( empty( $filename ) ) {
		return '';
	}

	$location = '';

	if ( $return_type === 'url' ) {

		global $WPWP_TEMPLATE_IMAGES_URI;

		$location = $WPWP_TEMPLATE_IMAGES_URI . '/' . $filename;
	
	} 
	
	else if ( $return_type === 'path' ) {
		/**
		 * TODO: If needed.
		 */
	}

	return $location;
}
