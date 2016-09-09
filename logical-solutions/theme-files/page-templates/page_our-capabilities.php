<?php
/*
Template Name: Our Capabilities
*/
get_header('grey');
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) {
      the_post();
      get_template_part( '/template-parts/hero' );
    }
    ?>

    <section class="section-md">
      <div class="container">
        <h3 class="text-center text-bold text-brand-mid-blue track-out">We’re proud to exceed expectations within a variety of markets, including:</h3>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Commercial Office Buildings and Campuses</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Religious Institutions</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Educational Facilities</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Healthcare Buildings and Campuses</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Hospitality and Entertainment Venues</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Industrial Sites</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Pharmaceutical Facilities</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="arrow-link">Critical Systems/Data Centers</a>
          </div>
        </div>
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
