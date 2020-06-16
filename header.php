<?php

global $post;

$application_name = 'WordPress Webpack React Boiler';

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<?php 
	/**
	 * Production check - only load GTM (Google Tag Manager) snippet
	 * if this installation is detected on recordingconnection.com
	 */
	if ( wpwpbp_is_production() === true ) : ?>
		
		<!-- Add GTM script #1 -->

	<?php endif; ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo wpwpbp_get_image( 'apple-touch-icon-144x144.png' ); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo wpwpbp_get_image( 'apple-touch-icon-152x152.png' ); ?>">
	<link rel="icon" type="image/png" href="<?php echo wpwpbp_get_image( 'favicon-32x32.png' ); ?>" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo wpwpbp_get_image( 'favicon-16x16.png' ); ?>" sizes="16x16">

	<meta name="application-name" content="<?php echo $application_name; ?>">
	<meta name="msapplication-TileColor" content="#aaaaaa">
	<meta name="msapplication-TileImage" content="<?php echo wpwpbp_get_image( 'mstile-144x144.png' ); ?>">

	<?php wp_head(); ?>

</head>

<body class="<?php echo $post->post_name; ?> t_<?php echo $post->post_type; ?> <?php echo join( ' ', get_body_class() ); ?>">

	<?php 
	/**
	 * Production check - only load GTM (Google Tag Manager) snippet
	 * if this installation is detected on production domain
	 */
	if ( wpwpbp_is_production() === true ) : ?>

		<!-- Add GTM script #2 -->
	
	<?php endif; ?>

	<header class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-3 d-flex align-items-center">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo wpwpbp_get_image( 'logo.svg' ); ?>" class="logo header-logo" alt="Logo">
				</a>
			</div>
			<div class="col-9 d-flex align-items-center">
				<?php
				
				get_template_part( 'template-parts/header-nav' );
				
				?>
			</div>
		</div>
		</div>
	</header>

	<div class="wpwp-slider"></div>

	<section id="main-content" class="container">
