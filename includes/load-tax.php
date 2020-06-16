<?php

/**
 * Every PHP file in includes/tax/ should be a Custom Taxonomy definition
 */
foreach ( glob( get_template_directory() . '/includes/tax/*.php' ) as $filename ) :

	include $filename;

endforeach;
