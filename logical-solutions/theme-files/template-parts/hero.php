<?php
/**
 * Template part for the inner page heros.
 *
 * @package Logical_Solutions
 */
?>
<div class="page-hero">
  <div class="page-hero--image" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
  <div class="container">
    <h1 class="page-hero--title uppercase"><?php the_title(); ?></h1>
    <h4 class="page-hero--blurb"><?php echo the_field('header_blurb');?></h4>
  </div>
</div>
