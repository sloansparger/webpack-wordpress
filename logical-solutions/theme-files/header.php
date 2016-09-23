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


	<header class="header header__slider">
		<?php get_template_part('template-parts/header'); ?>
	</header>

	<nav class="mobile-nav hidden-lg hidden-md" v-bind:class="{'mobile-nav__hidden': !mobileNavOpen}">
		<div class="mobile-nav--exit" @click="closeMobileNav"></div>
		<ul class="mobile-nav--menu">
			<li class="mobile-nav--menu-item">
				<a class="mobile-nav--menu-link" href="/our-company">Company</a>
			</li>
			<li class="mobile-nav--menu-item">
				<a class="mobile-nav--menu-link" href="/capabilities">Capabilities</a>
			</li>
			<li class="mobile-nav--menu-item">
				<a class="mobile-nav--menu-link" href="/case-studies">Case Studies</a>
			</li>
			<li class="mobile-nav--menu-item">
				<a class="mobile-nav--menu-link" href="/products">Products</a>
			</li>
			<li class="mobile-nav--menu-item">
				<a class="mobile-nav--menu-link" href="/contact">Contact Us</a>
			</li>
		</ul>

		<ul class="mobile-nav--menu">
			<li class="mobile-nav--sub-item">
				<a href="/training" class="mobile-nav--sub-link mobile-nav--sub-link__padded">Training</a>
			</li>
			<li class="mobile-nav--sub-item">
				<a href="/resources" class="mobile-nav--sub-link mobile-nav--sub-link__padded">Resources</a>
			</li>
			<li class="mobile-nav--sub-item">
				<a href="/careers" class="mobile-nav--sub-link mobile-nav--sub-link__padded">Careers</a>
			</li>
		</ul>

		<div class="mobile-nav--footer">
			<div class="mobile-nav--logo"></div>

			<div class="mobile-nav--contact">
				<a href="tel:972-437-5500">
					<p class="mobile-nav--sub-link">Tel: 972.437.5500</p>
				</a>
				<p class="mobile-nav--sub-link">Fax: 972.437.3318</p>
				<a class="mobile-nav--sub-link" href="https://www.google.com/maps/place/407+International+Pkwy+%23406,+Richardson,+TX+75081/@32.9548219,-96.7122626,17z/data=!3m1!4b1!4m5!3m4!1s0x864c1f0332305ac3:0x12c5f11a6424ee1!8m2!3d32.9548219!4d-96.7100739">
					<address class="mt2">
						407 International Pkwy<br/>
						Suite 406<br/>
						Richardson, TX 75081
					</address>
				</a>
			</div>
		</div>
	</nav>

	<div id="content" class="site-content">
