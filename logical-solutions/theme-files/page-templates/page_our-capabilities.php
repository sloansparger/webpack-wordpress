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
        <h3 class="text-center information-title">We’re proud to exceed expectations<br class="hidden-lg hidden-md"> within a variety of markets, including:</h3>
        <div class="row">
          <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
            <a href="#" class="capabilities--arrow-link">Commercial Office Buildings and Campuses</a>
          </div>
          <div class="col-xs-5 col-md-3">
            <a href="#" class="capabilities--arrow-link">Religious Institutions</a>
          </div>
          <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
            <a href="#" class="capabilities--arrow-link">Educational Facilities</a>
          </div>
          <div class="col-xs-5 col-md-3">
            <a href="#" class="capabilities--arrow-link">Healthcare Buildings and Campuses</a>
          </div>
          <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
            <a href="#" class="capabilities--arrow-link">Hospitality and Entertainment Venues</a>
          </div>
          <div class="col-xs-5 col-md-3">
            <a href="#" class="capabilities--arrow-link">Industrial Sites</a>
          </div>
          <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
            <a href="#" class="capabilities--arrow-link">Pharmaceutical Facilities</a>
          </div>
          <div class="col-xs-5 col-md-3">
            <a href="#" class="capabilities--arrow-link">Critical Systems/Data Centers</a>
          </div>
        </div>
        <p class="text-brand-green text-sm text-thin text-center">Click on a category above to learn more</p>
      </div>
    </section>

    <section class="blurb-section bg-cool-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<blockquote class="text-center">
							We put the power in your hands through robust yet intuitive software - allowing you to control your facility on any computer with internet access. The freedom for seamless system integration can be yours, with open communication protocols enabling integration of third-party elements like security, fire, lighting, and other key mechanical systems.
						</blockquote>
            <br>
            <p class="text-center">LSi is a licensed security provider in the state of Texas (TXB15530). As a Lenel Value Authorized Reseller (VAR), we offer design, installation, and service for OnGuard Access Control. </p>
					</div>
				</div>
			</div>
		</section>

    <section class="studies--study">
      <div class="studies--image">

      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6">
            <h3 class="section-title studies--title studies--title__right">Featured Products</h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="/products" class="studies--btn btn btn__blue">View All Products</a>
          </div>
        </div>
      </div>
    </section>

    <section class="blurb-section bg-cool-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<blockquote class="text-center">
							Our dedicated LSi service team has a proven track record, with unmatched experience encompassing energy-related controls and instrumentation projects.
						</blockquote>
					</div>
				</div>
			</div>
		</section>

    <section class="section-md">
      <div class="container">
        <h3 class="section-title">Services</h3>
        <div class="row">
          <div class="col-xs-12 col-md-5">
            <p>To ensure that your facility is properly supported, LSi offers structured technical support programs that include all preventative and scheduled system performance calibrations and future upgrades. </p>
            <br>
            <p>We offer four comprehensive programs tailored to suit your needs, beginning with the simple annual Preventative Support Program, or the all-inclusive Premium All-Inclusive Support Program. </p>
          </div>
          <div class="col-xs-12 col-md-7">
            <h4 class="text-bold text-brand-mid-blue mt0 mb3">Each program offers scaled and discounted rates for:</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="blurb-section bg-cool-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<blockquote class="text-center">
							LSi offers choices for educational opportunities to ensure our clients are well-educated at the appropriate level for their usage. Both predetermined and custom programs are available, in our facility or yours.
						</blockquote>
					</div>
				</div>
			</div>
		</section>

    <section class="section-md">
      <div class="container">
        <h3 class="section-title">Training</h3>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <a href="/products" class="btn btn__blue">Learn More about Training</a>
          </div>
          <div class="col-xs-12 col-md-6">
            <p>Held monthly, operators of WebCTRL are invited to join our formal classroom training for an overview of the system, as well as specific feature sets. </p>
            <br>
            <p>Utilizing individual User Manuals and hands-on computer workstations, the curriculum includes an introduction to WebCTRL system navigation; establishing setpoints; creating, modifying, and deleting schedules; creating trend graphs and reports; managing alarms; creating and modifying operator privileges - and more. The class runs from 9:00am to approximately 3:30pm at LSi, and meals are included. </p>
          </div>
        </div>
      </div>
    </section>


  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
