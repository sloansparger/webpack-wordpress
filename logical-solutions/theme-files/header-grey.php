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

	<header id="masthead" class="header header__grey-bg" role="banner">
		<?php get_template_part('template-parts/header'); ?>
	</header><!-- #masthead -->


	<header class="header header__slider">
		<?php get_template_part('template-parts/header'); ?>
	</header>

	<div id="content" class="site-content">
