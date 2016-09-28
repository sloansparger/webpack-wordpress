<?php
/*
Template Name: Training
*/
get_header('grey');
?>
<div id="app">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

        // get editable content
        $body_text = get_field('body_text');

        // get training session posts and order by session_date (unix timestamp)
        $sessions = new WP_Query(array(
          'post_type'       => 'lsi_training_session',
          'posts_per_page'  => -1,
          'meta_key'        => 'session_date',
          'orderby'         => 'meta_value_num',
          'order'           => 'ASC',
        ));

      ?>

			<section class="section-md training--top-section">
				<div class="container">
					<h3 class="section-title">Training</h3>
				  <div class="row">
				    <div class="col-md-7">
              <p><?php echo $body_text; ?></p>
							<div class="training--divider"></div>
				    </div>
				    <div class="col-md-3 col-md-offset-2">
              <a href="#register" class="btn btn__blue mb5">Register Now</a>
              <h1 class="uppercase text-thin mt0">Schedule</h1>

              <?php
                if ( $sessions->have_posts() ) : while ( $sessions->have_posts() ) : $sessions->the_post();
                  echo '<p v-text="' . get_field('session_date') . ' | epochToShortDate"></p><br>';
                endwhile; endif;
                wp_reset_query();
              ?>

				    </div>
				  </div>
				</div>
			</section>

      <section>
        <div class="container">
          <h3 class="section-title image-section--title">Next Session</h3>

            <?php
              // call the first post in the query (should be first and soonest session_date)
              if ( $sessions->have_posts() ) : $sessions->the_post();
                $session_date = get_field('session_date');
                $start_time = get_field('start_time');
                $end_time = get_field('end_time');
                $registration_deadline = get_field('registration_deadline');
              endif;
            ?>

					<h1 class="uppercase text-thin track-out mt0 mb5" v-text="<?php echo $session_date; ?> | epochToFullDate"></h1>
          <div class="row">
            <div class="col-md-4">
              <p class="text-bold mb0 uppercase">Session Time</p>
              <p><?php echo $start_time; ?> - <?php echo $end_time; ?></p>
						</div>
						<div class="col-md-4">
							<p class="text-bold mb0 uppercase">Session Location</p>
              <a class="text-brand-dark-blue" href="https://www.google.com/maps/place/407+International+Pkwy+%23406,+Richardson,+TX+75081/@32.9548219,-96.7122626,17z/data=!3m1!4b1!4m5!3m4!1s0x864c1f0332305ac3:0x12c5f11a6424ee1!8m2!3d32.9548219!4d-96.7100739">
								<address class="mb3"><p>
              	  407 International Pkwy<br/>
              	  Suite 406<br/>
              	  Richardson, Texas 75081
              	</p></address>
							</a>
						</div>
						<div class="col-md-4">
              <p class="text-bold mb0 uppercase">Registration Deadline</p>
              <p v-text="<?php echo $registration_deadline; ?> | epochToMMMMDDYYYY"></p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-md bg-cool-light-grey" id="register">
        <div class="container">
          <h3 class="section-title">Register for Training</h3>
          <?php echo do_shortcode( '[contact-form-7 id="115" title="Training Form"]' ); ?>
        </div>
      </section>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
