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

<body <?php body_class(); ?> id="app" v-bind:class="{'modal-is-open': modalOpen}">
<div id="page" class="site">

	<header id="masthead" class="header" role="banner">
		<?php get_template_part('template-parts/header'); ?>
	</header><!-- #masthead -->

	<header class="header header__slider" v-bind:class="{'header__slider__active': slideNavActive}">
		<?php get_template_part('template-parts/header'); ?>
	</header>

	<?php get_template_part('template-parts/mobile-nav'); ?>

	<div id="content" class="site-content">
