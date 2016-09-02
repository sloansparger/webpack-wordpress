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

	<header id="masthead" class="header" role="banner">
		<?php get_template_part('template-parts/header'); ?>
	</header><!-- #masthead -->


	<header class="slide-header header">
		<?php get_template_part('template-parts/header'); ?>
	</header>

	<div id="content" class="site-content">
