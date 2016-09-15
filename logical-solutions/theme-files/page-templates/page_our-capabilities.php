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
              <p id="modal1"
                 @click="openModal('Commercial Office Buildings and Campuses',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aliquam voluptatibus quas debitis, provident officiis sit esse enim iusto, quaerat quam libero laborum quia reprehenderit eveniet fuga voluptas numquam repellat.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   1)"
                class="capabilities--arrow-link">
                Commercial Office Buildings and Campuses
              </p>
            </div>
            <div class="col-xs-5 col-md-3">
              <p id="modal2"
                 @click="openModal('Religious Institutions',
                                   'Worship services, spaghetti suppers, weddings, Mothers&quot; Morning Out, Sunday school, choir practice, and the list goes on. Make your place of worship&quot;s complex schedule simple again - with LSi. From any computer with an Internet connection, you can set schedules, control, and monitor your building, all with a click of the mouse. Find out how we can help you simplify - contact us today.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   2)"
                class="capabilities--arrow-link">
                Religious Institutions
              </p>
            </div>
            <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
              <p id="modal3"
                 @click="openModal('Educational Facilities',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iure, voluptas tempora? Eaque blanditiis necessitatibus sunt est enim, inventore iste rem, amet suscipit praesentium corporis qui, itaque eligendi fugiat repudiandae.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   3)"
                class="capabilities--arrow-link">
                Educational Facilities
              </p>
            </div>
            <div class="col-xs-5 col-md-3">
              <p id="modal4"
                 @click="openModal('Healthcare Buildings and Campuses',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi ab esse quisquam nemo eaque, culpa et mollitia veniam est, qui laborum nesciunt voluptates itaque ipsam, quam perferendis repellat! Assumenda, commodi.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   4)"
                class="capabilities--arrow-link">
                Healthcare Buildings and Campuses
              </p>
            </div>
            <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
              <p id="modal5"
                 @click="openModal('Hospitality and Entertainment Venues',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius nisi nostrum, molestiae, illum voluptate! Doloremque molestias laboriosam quod nulla doloribus obcaecati repellendus delectus quos fugiat unde, praesentium, rerum ullam!',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   5)"
                class="capabilities--arrow-link">
                Hospitality and Entertainment Venues
              </p>
            </div>
            <div class="col-xs-5 col-md-3">
              <p id="modal6"
                 @click="openModal('Industrial Sites',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis cumque, non ratione. Laboriosam, dignissimos amet aliquid similique, et illum nemo voluptatum animi labore sed provident eligendi, ipsam odit a distinctio.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   6)"
                class="capabilities--arrow-link">
                Industrial Sites
              </p>
            </div>
            <div class="col-xs-5 col-md-3 col-xs-offset-1 col-md-offset-0">
              <p id="modal7"
                 @click="openModal('Pharmaceutical Facilities',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aut laborum, consectetur, tempora, suscipit necessitatibus architecto quisquam est veritatis ipsa quo iusto sunt laboriosam ipsum voluptatem odit ratione distinctio eius?',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   7)"
                class="capabilities--arrow-link">
                Pharmaceutical Facilities
              </p>
            </div>
            <div class="col-xs-5 col-md-3">
              <p id="modal8"
                 @click="openModal('Critical Systems/Data Centers',
                                   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quia dolore repellendus exercitationem recusandae est deserunt sit repudiandae harum voluptatum, officiis aperiam quaerat ducimus beatae error quis ipsam doloremque earum.',
                                   'Desc 1\n\nDesc 2\n\nDesc 3\n\nDesc 4',
                                   8)"
                class="capabilities--arrow-link">
                Critical Systems/Data Centers
              </p>
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


      <section class="image-section">
        <div class="image-section--image">
          <div class="capabilities--image" style="background: pink" v-show="slideNumber === 1">
            <p class="capabilities--image-text">Doloremque laudantium, totam rem aperiam, eaqu e ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
          <div class="capabilities--image" style="background: honeydew" v-show="slideNumber === 2">
            <p class="capabilities--image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veniam accusamus non ducimus, pariatur fugit harum quod.</p>
          </div>
          <div class="capabilities--image" style="background: tomato" v-show="slideNumber === 3">
            <p class="capabilities--image-text">Nisi odit inventore id dolores possimus sint tempore dignissimos, saepe quas eveniet. Veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <h3 class="section-title image-section--title image-section--title__right">Featured Products</h3>
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
              <a href="/products" class="btn btn__blue">Learn More about Training</a>
            </div>
            <div class="col-xs-12 col-md-6">
              <div v-show="trainingNumber === 1">
                <p>Held monthly, operators of WebCTRL are invited to join our formal classroom training for an overview of the system, as well as specific feature sets. </p>
                <br>
                <p>Utilizing individual User Manuals and hands-on computer workstations, the curriculum includes an introduction to WebCTRL system navigation; establishing setpoints; creating, modifying, and deleting schedules; creating trend graphs and reports; managing alarms; creating and modifying operator privileges - and more. The class runs from 9:00am to approximately 3:30pm at LSi, and meals are included. </p>
              </div>
              <div v-show="trainingNumber === 2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, quasi, a. Fugit labore voluptatibus eos commodi, adipisci molestiae voluptatem pariatur nisi repudiandae. Ullam fugit, similique, animi modi error voluptatum consequuntur.</p>
                <br>
                <p>Ea, eligendi tempore voluptate, libero sunt nihil distinctio molestias aperiam quae placeat eaque labore, qui quo voluptatem deleniti? Dolorem doloribus voluptas accusamus.</p>
              </div>
              <div v-show="trainingNumber === 3">
                <p>Ea, vitae possimus, numquam cupiditate atque id, illo dolorum ipsum exercitationem debitis doloribus hic sint delectus inventore rerum iste. Ut, repellendus, iusto.</p>
                <br>
                <p>Nemo repellendus, dolore non, odit architecto ratione excepturi maiores est suscipit eaque magni nulla dolorum quaerat asperiores similique ab laborum possimus tempore!</p>
              </div>
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
				      <p class="text-bold">{{currentDescription}}</p>
				    </div>
				    <div class="col-md-5 col-md-offset-1">
				      <div class="capabilities--include-section">
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

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
get_footer();
