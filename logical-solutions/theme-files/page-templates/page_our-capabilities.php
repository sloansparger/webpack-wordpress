<?php
/*
Template Name: Our Capabilities
*/
get_header('grey');
?>

<div id="app">
  <div id="capabilities" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( '/template-parts/hero' );

        $markets_section_text = get_field('markets_section_text');
        $products_blurb = get_field('products_blurb');
        $products_company_description = get_field('products_company_description');
        $service_blurb = get_field('service_blurb');
        $services_text = get_field('services_text');
        $training_blurb = get_field('training_blurb');
        $trainingSlideText1 = get_field('training_slide_1');
        $trainingSlideText2 = get_field('training_slide_2');
        $trainingSlideText3 = get_field('training_slide_3');
       ?>

      <section class="section-md">
        <div class="container">
          <h3 class="text-center information-title"><?php echo $markets_section_text; ?></h3>
          <div class="row">
            <?php $capabilities = new WP_Query( array( 'post_type' => 'lsi_capabilities' ) );
                  $count = 0;
                  if ( $capabilities->have_posts() ) : while ( $capabilities->have_posts() ) : $capabilities->the_post();
                  $desc = get_field('description', false, false);
                  $includes = get_field('includes', false, false);
            ?>
              <div class="col-xxs-12 col-xs-6 col-md-3">
                <p id="modal<?php echo $count + 1; ?>"
                   @click="openModal(`<?php the_title(); ?>`, `<?php echo $desc; ?>`, `<?php echo $includes; ?>`, <?php echo $count + 1; ?>)"
                   class="capabilities--arrow-link">
                   <?php the_title(); ?>
                </p>
              </div>
            <?php $count++;
                  endwhile; else: endif; ?>

        </div>
        <p class="capabilities--learn-more text-brand-green text-center">Click on a category above to learn more</p>
      </section>

      <section class="blurb-section bg-cool-light-grey">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-12 col-md-10 col-md-offset-1">
  						<blockquote class="text-center"><?php echo $products_blurb; ?></blockquote>
              <br>
              <p class="blurb-section--lower text-center"><?php echo $products_company_description; ?></p>
  					</div>
  				</div>
  			</div>
  		</section>


      <section class="image-section">
        <div class="image-section--image">
          <div class="capabilities--image" style="background-image: url('/wp-content/uploads/2016/09/Capabilities_ProductSliders_WebCTRLSystems.jpg')" v-show="slideNumber === 1" transition="fade">
            <p class="capabilities--image-text">Doloremque laudantium, totam rem aperiam, eaqu e ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
          <div class="capabilities--image" style="background-image: url('/wp-content/uploads/2016/09/Capabilities_ProductSliders_ECO-ScreenKiosk.jpg')" v-show="slideNumber === 2" transition="fade">
            <p class="capabilities--image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veniam accusamus non ducimus, pariatur fugit harum quod.</p>
          </div>
          <div class="capabilities--image" style="background-image: url('/wp-content/uploads/2016/09/Capabilities_ProductSliders_EnergyReportsPackage.jpg')" v-show="slideNumber === 3" transition="fade">
            <p class="capabilities--image-text">Nisi odit inventore id dolores possimus sint tempore dignissimos, saepe quas eveniet. Veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <h3 class="section-title image-section--title image-section--title__right blue-title-mobile">Featured Products</h3>
              <div class="capabilities--options">
                <div class="capabilities--option" v-on:click="showSlide(1)" v-bind:class="{ 'active': slideNumber === 1 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">WebCTRL System</h4>
                </div>
                <div class="capabilities--option" v-on:click="showSlide(2)" v-bind:class="{ 'active': slideNumber === 2 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">Eco-screen Kiosk</h4>
                </div>
                <div class="capabilities--option" v-on:click="showSlide(3)" v-bind:class="{ 'active': slideNumber === 3 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">EnergyReports Package</h4>
                </div>
              </div>
              <a href="/products" class="btn btn__blue">View All Products</a>
            </div>
          </div>
        </div>
      </section>

      <section class="blurb-section bg-cool-light-grey">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-12 col-md-8 col-md-offset-2">
  						<blockquote class="text-center"><?php echo $service_blurb; ?></blockquote>
  					</div>
  				</div>
  			</div>
  		</section>

      <section class="section-md">
        <div class="container">
          <h3 class="section-title">Services</h3>
          <div class="row">
            <div class="col-xs-12 col-md-5">
              <p class="capabilities--mobile-paragraph-margin-bottom"><?php echo $services_text; ?></p>
            </div>
            <div class="col-xs-12 col-md-7">
              <h3 class="text-bold text-brand-mid-blue mt0 mb3">Each program offers scaled and discounted rates for:</h3>
              <div class="row">
                <div class="col-xs-12 col-md-7">
                  <p>Telephone Support</p>
                  <p>Preventative Maintenance Inspections</p>
                  <p>ALC Parts Pricing</p>
                  <p>Time & Material Rates</p>
                </div>
                <div class="col-xs-12 col-md-5">
                  <p>Labor for Onsite Repair Service</p>
                  <p>Priority Onsite Response</p>
                  <p>Software Upgrade</p>
                  <p>Operator Training</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="blurb-section bg-cool-light-grey">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-12 col-md-10 col-md-offset-1">
  						<blockquote class="text-center"><?php echo $training_blurb; ?></blockquote>
  					</div>
  				</div>
  			</div>
  		</section>

      <section class="section-md">
        <div class="container">
          <h3 class="section-title">Training</h3>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="capabilities--options">
                <div class="capabilities--option" v-on:click="showTraining(1)" v-bind:class="{ 'active': trainingNumber === 1 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">WebCTRL Basic Operator Training</h4>
                </div>
                <div class="capabilities--option" v-on:click="showTraining(2)" v-bind:class="{ 'active': trainingNumber === 2 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">WebCTRL Advanced Operator Training</h4>
                </div>
                <div class="capabilities--option" v-on:click="showTraining(3)" v-bind:class="{ 'active': trainingNumber === 3 }">
                  <div class="capabilities--option-dot"></div>
                  <h4 class="capabilities--option-text">Customized Training</h4>
                </div>
              </div>
              <a href="/training" class="btn btn__blue hidden-sm hidden-xs">Learn More about Training</a>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="capabilities--mobile-paragraph-margin-bottom">
                <div v-show="trainingNumber === 1">
                  <p><?php echo $trainingSlideText1; ?></p>
                </div>
                <div v-show="trainingNumber === 2">
                  <p><?php echo $trainingSlideText2; ?></p>
                </div>
                <div v-show="trainingNumber === 3">
                  <p><?php echo $trainingSlideText3; ?></p>
                </div>
              </div>
              <a href="/training" class="btn btn__blue capabilities--training--learn-more hidden-md hidden-lg">Learn More about Training</a>
            </div>
          </div>
        </div>
      </section>

      <div class="modal" v-bind:class="{'modal__open': modalOpen}">
				<div class="container relative">
	        <div class="modal--exit" @click="closeModal"></div>
	      </div>
				<div class="container">
          <h3 class="section-title">{{currentTitle}}</h3>
				</div>
				<div class="container">
				  <div class="row">
				    <div class="col-md-5">
				      <p class="text-bold capabilities--description-section">{{currentDescription}}</p>
				    </div>
				    <div class="col-md-5 col-md-offset-1">
				      <div class="capabilities--include-section">
                <br>
				        <p class="text-bold mb2">Installations Include:</p>
				        <ul class="capabilities--includes">
				          <li v-for="includes in currentIncludes" track-by="$index" class="capabilities--include">
				            {{includes}}
				          </li>
				        </ul>
                <p class="capabilities--modal-nav text-brand-green mb0">
                  <button v-bind:class="{'capabilities--modal-button__disabled': isFirstIndex}"
                          class="capabilities--modal-button"
                          @click="prevModal"
                          >
                    &lt;&lt;
                  </button>
                  Categories
                  <button class="capabilities--modal-button"
                          @click="nextModal"
                          v-bind:class="{'capabilities--modal-button__disabled': isLastIndex}">
                    &gt;&gt;
                  </button>
                </p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

      <?php endwhile; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
get_footer();
