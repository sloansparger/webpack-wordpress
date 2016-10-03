<?php
/*
Template Name: Resources
*/
get_header('grey');
?>
<div id="app">
  <div id="capabilities" class="content-area">
    <main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

        $body_text = get_field('body_text');
      ?>

      <section class="section-md section__lead">
				<div class="container">
					<h3 class="section-title">Resources</h3>
					<div class="row">
					  <div class="col-md-8">
					    <p><?php echo $body_text; ?></p>
					  </div>
					</div>
				</div>
			</section>
			<section>
        <div class="container">
          <div class="resources">
            <?php $resources = new WP_Query( array( 'post_type' => 'lsi_resource' ) );
                  if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post();
                  $desc = get_field('description', false, false);
									$link = get_field('link', false, false);
            ?>
            <div class="resource">
              <div class="resource--title-container">
                <p class="resource--title uppercase mb0"><?php the_title() ?></p>
              </div>
              <p class="resource--excerpt"><?php echo $desc ?></p>
              <a href="<?php echo $link ?>" target="_" class="btn btn__blue btn__small">Visit Site</a>
            </div>
            <?php endwhile; else: endif; ?>
          </div>
				</div>
			</section>

      <?php endwhile; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
get_footer();
