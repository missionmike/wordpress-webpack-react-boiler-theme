<?php

/**
 * Every PHP file in includes/cpt/ should be a Custom Post Type definition
 */
foreach ( glob( get_template_directory() . '/includes/cpt/*.php' ) as $filename ) {

	include $filename;

}
