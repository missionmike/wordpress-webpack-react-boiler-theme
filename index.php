<?php
/**
 * This theme includes the bare-bones minimum.... for more info 
 * on which template files may suit your use-case, please visit
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		the_content();
		
	endwhile;

endif;

get_footer();
