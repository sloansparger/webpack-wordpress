<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logical_Solutions
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php get_template_part('template-parts/head'); ?>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'logical-solutions' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<header class="slide-header">
		<div class="slide-header--container">
			<div class="slide-header--logo-wrapper">
				<img class="slide-header--logo" src="/wp-content/themes/logical-solutions/images/brand-assets/lsi-logo-color.svg" alt="logo" />
			</div>

			<div class="slide-header--menu"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></div>
		</div>
	</header>

	<div id="content" class="site-content">
