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
			while ( have_posts() ) {
				the_post();
			}
			?>

			<section class="section-md training--top-section">
				<div class="container">
					<h3 class="section-title">Training</h3>
				  <div class="row">
				    <div class="col-md-7">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper, felis nec pellentesque vehicula, turpis nibh placerat eros, eu pharetra tortor ligula consectetur velit. Fusce dignissim lobortis mollis. Aenean imperdiet volutpat accumsan. Sed sem turpis, imperdiet a aliquam sed, posuere vel nisl. Suspendisse nec magna non elit elementum bibendum nec quis metus. Aliquam elementum ex in justo tincidunt tincidunt. Cras rutrum nulla et risus laoreet euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras tincidunt et leo vel viverra.</p>
              <p>Fusce id tortor nec sem pulvinar placerat sit amet non ante. Maecenas scelerisque lacus sit amet aliquam congue. Donec fermentum, odio ut scelerisque mollis, nisi tortor vehicula leo, sed placerat quam justo non nibh. Donec feugiat mi vel ex luctus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sagittis ut neque eu blandit. Vivamus a imperdiet mauris, quis luctus eros. Suspendisse pharetra mi quis eleifend euismod. Donec est est, ultricies et mollis id, pretium nec dui.</p>
				    </div>
				    <div class="col-md-3 col-md-offset-2">
              <a href="/products" class="btn btn__blue mb5">Register Now</a>
              <h1 class="uppercase text-thin mt0">Schedule</h1>
				    </div>
				  </div>
				</div>
			</section>

      <section class="relative">
        <div class="training--info-section">
          <h1 class="text-thin text-white uppercase mt0">This Session Limit</h1>
          <p class="text-white">for 00.00.2016</p>
          <h1 class="text-white">45</h1>
          <h1 class="text-white">Current Enrollment</h1>
        </div>
        <div class="container">
          <h3 class="section-title image-section--title">Next Session</h3>
          <div class="row">
            <div class="col-md-6">
              <h1 class="uppercase text-thin track-out mt0 mb5">Wednesday, August 10, 2016</h1>
              <div class="row">
                <div class="col-md-6">
                  <p class="text-bold mb0 uppercase">Session Details</p>
                  <p>10:00 AM - 2:00 PM</p>
                  <br>
                  <address class="mb3"><p>
                    407 International Pkwy<br/>
                    Suite 406<br/>
                    Richardson, Texas 75081
                  </p></address>
                </div>
                <div class="col-md-6">
                  <p class="text-bold mb0 uppercase">Registration Deadline</p>
                  <p>August 01, 2016</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-md bg-cool-light-grey">
        <div class="container">
          <h3 class="section-title">Register for Training</h3>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
