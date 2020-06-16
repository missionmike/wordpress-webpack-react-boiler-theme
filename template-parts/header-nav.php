<?php

defined ( 'ABSPATH' ) or die('');

require_once( get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php' );

$args = array(
	'menu' 				=> 'primary',
	'theme_location'	=> 'header',
	'container' 		=> 'nav',
	'container_class' 	=> 'navbar-collapse',
	'container_id' 		=> 'collapse-1',
	'menu_class' 		=> 'nav navbar-nav flex-row-reverse',
	'fallback_cb'		=> false,
	'walker'			=> new WP_Bootstrap_Navwalker(),
);

wp_nav_menu( $args );
