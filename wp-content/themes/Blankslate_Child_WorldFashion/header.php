<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="bg-light">
		<a href="<?= esc_url(home_url( '/' )) ?>" class="logo">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/logo.png" alt="" height="20">
		</a>
		<div class="header-right">
			<nav><?= wp_nav_menu() ?></nav>
			<label for="sidebar-checker" class="sidebar-toggler">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>
	</header>
	<div id="container">