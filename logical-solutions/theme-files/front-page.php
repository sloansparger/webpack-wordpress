<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Logical_Solutions
 */

get_header(); ?>

<div class="page-hero page-hero__home-page">
  <div class="page-hero--image" style="background-image: url()">
  </div>
  <div class="container">
    <div class="home-hero">
      <div class="home-hero--choose-container">
        <p class="home-hero--choose-container--choose uppercase text-bold">Choose</p>
      </div>
      <div class="home-hero--white-box">
        <p class="home-hero--white-box--logical-solution uppercase text-bold">A Logical Solution</p>
      </div>
      <div class="home-hero--blue-box">
        <p class="home-hero--blue-box--subtitle text-bold">For your energy management and control systems</p>
      </div>
    </div>
    <div class="home-hero--see-our-process-container">
      <a class="home-hero--see-our-process-container--see-our-process uppercase text-bold text-white">See our process <span class="hidden-xs">below</span></a>
    </div>
  </div>
</div>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>


<?php
get_footer();
