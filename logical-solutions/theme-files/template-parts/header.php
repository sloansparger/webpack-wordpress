<?php
/**
 * Template part for the base of each header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Logical_Solutions
 */

?>
<div class="header--container">
  <a href="/" class="header--logo-wrapper">
    <img class="header--logo header--logo__color" src="/wp-content/themes/logical-solutions/images/brand-assets/lsi-logo-color.svg" alt="logo" />
    <img class="header--logo header--logo__white" src="/wp-content/themes/logical-solutions/images/brand-assets/lsi-logo-white.svg" alt="logo" />
  </a>

  <div class="header--menu clearfix"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'clearfix') ); ?></div>
  <div class="header--hamburger hidden-md hidden-lg" @click="openMobileNav"></div>
</div>
