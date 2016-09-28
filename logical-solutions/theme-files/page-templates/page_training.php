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

        $body_text = get_field('body_text');
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
				    </div>
				  </div>
				</div>
			</section>

      <section>
        <div class="container">
          <h3 class="section-title image-section--title">Next Session</h3>
					<h1 class="uppercase text-thin track-out mt0 mb5">Wednesday, August 10, 2016</h1>
          <div class="row">
            <div class="col-md-4">
              <p class="text-bold mb0 uppercase">Session Time</p>
              <p>10:00 AM - 2:00 PM</p>
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
              <p>August 01, 2016</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-md bg-cool-light-grey" id="register">
        <div class="container">
          <h3 class="section-title">Register for Training</h3>
          <?php echo do_shortcode( '[contact-form-7 id="141" title="Training Form"]' ); ?>
        </div>
      </section>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
