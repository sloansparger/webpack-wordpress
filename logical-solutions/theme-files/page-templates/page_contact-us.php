<?php
/*
Template Name: Contact Us
*/
get_header('grey');
?>
<div id="app">
  <div id="capabilities" class="content-area">
    <main id="main" class="site-main" role="main">


      <div id="map" class="contact--map"></div>

      <section class="section-md">
				<div class="container">
					<h3 class="section-title">Contact Us</h3>
					<div class="row">
					  <div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-1">
              <h3 class="text-bold">Address</h3>
              <p class="contact--address-name">Logical Solutions, Inc.</p>
              <a class="contact--address" href="https://www.google.com/maps/place/407+International+Pkwy+%23406,+Richardson,+TX+75081/@32.9548219,-96.7122626,17z/data=!3m1!4b1!4m5!3m4!1s0x864c1f0332305ac3:0x12c5f11a6424ee1!8m2!3d32.9548219!4d-96.7100739">
                <address><p>
                  407 Internation Pkwy<br/>
                  Suite 406<br/>
                  Richardson, Texas 75801
                </p></address>
              </a>
					  </div>
					  <div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-1">
              <h3 class="text-bold">Phone Number</h3>
              <a href="tel:972-437-5500" class="text-brand-mid-blue">
                <h1 class="contact--number text-thin">972.437.5500</h1>
              </a>
              <address><p>
                Service - Ext 4<br/>
                Sales - Ext 26<br/>
                Finance - Ext 15<br/>
                Engineering - Ext 23, 29, or 14
              </p></address>
					  </div>
					  <div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-1">
              <h3 class="text-bold">Fax Number</h3>
              <h1 class="mt0 text-thin">972.437.5500</h1>
					  </div>
					</div>
				</div>
			</section>

      <section class="section-md bg-cool-light-grey">
				<div class="container">
					<h3 class="section-title">Send us a message</h3>
          <?php echo do_shortcode( '[contact-form-7 id="67" title="Contact Form"]' ); ?>
				</div>
			</section>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
get_footer();
