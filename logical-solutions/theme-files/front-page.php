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

<div id="home" class="page-hero page-hero__home-page">
  <div class="page-hero--image" style="background-image: url()"></div>
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

<section class="section-lg bg-cool-light-grey">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <blockquote class="text-center">
          Each solution is specifically crafted through our comprehensive four step process; ensuring an efficient and simple path to your Energy Star Rating
        </blockquote>
      </div>
    </div>
  </div>
</section>


<section class="section-md">

</section>


<section class="image-section bg-cool-light-grey">
  <div class="image-section--image image-section--image__right"></div>
  <div class="container">
    <h3 class="section-title section-title__banner image-section--title">Featured Products</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="capabilities--options">
          <div class="capabilities--option" v-on:click="showSlide('product', 1)" v-bind:class="{ 'active': productSlideNumber === 1 }">
            <div class="capabilities--option-dot capabilities--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text">WebCTRL System</h4>
          </div>
          <div class="capabilities--option" v-on:click="showSlide('product', 2)" v-bind:class="{ 'active': productSlideNumber === 2 }">
            <div class="capabilities--option-dot capabilities--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text">Roi Analysis</h4>
          </div>
          <div class="capabilities--option" v-on:click="showSlide('product', 3)" v-bind:class="{ 'active': productSlideNumber === 3 }">
            <div class="capabilities--option-dot capabilities--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text">Leed</h4>
          </div>
        </div>
        <a href="#" class="btn btn__blue">View All Products</a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
