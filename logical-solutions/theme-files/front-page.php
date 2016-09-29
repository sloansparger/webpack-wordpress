<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Logical_Solutions
 */

get_header(); ?>

<div id="home" class="page-hero page-hero__home-page">
  <div class="page-hero--image" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
  <div class="container">
    <div class="home-hero">
      <div class="home-hero--choose-container">
        <p class="home-hero--choose-container--choose uppercase text-bold">Choose</p>
      </div>
      <div class="home-hero--white-box">
        <p class="home-hero--white-box--logical-solution uppercase text-bold">A Logical Solution</p>
      </div>
      <div class="home-hero--blue-box">
        <p class="home-hero--blue-box--subtitle text-bold">For your energy management and control systems</p>
      </div>
    </div>
    <div class="home-hero--see-our-process-container">
      <a class="home-hero--see-our-process-container--see-our-process uppercase text-bold text-white">See our process <span class="hidden-xs">below</span></a>
    </div>
  </div>
</div>

<section class="section-lg four-step--blurb bg-cool-light-grey">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <blockquote class="text-center">
          Each solution is specifically crafted through our comprehensive four step process; ensuring an efficient and simple path to your Energy Star Rating
        </blockquote>
      </div>
    </div>
  </div>
</section>



<section class="four-step--container">
  <div class="image-section--image image-section--image__small">
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/StepOne_Photo.jpg')" v-show="stepsSlideNumber === 1">
      <h3 class="four-step--step-num">Step One</h3>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/StepTwo_Photo.jpg')" v-show="stepsSlideNumber === 2">
      <h3 class="four-step--step-num">Step Two</h3>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/StepThree_Photo.jpg')" v-show="stepsSlideNumber === 3">
      <h3 class="four-step--step-num">Step Three</h3>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/StepFour_Photo.jpg')" v-show="stepsSlideNumber === 4">
      <h3 class="four-step--step-num">Step Four</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-md-offset-5">
        <div class="four-step--options">
          <div class="four-step--option" v-on:click="showSlide('steps', 1)" v-bind:class="{ 'active': stepsSlideNumber === 1 }">
            <div class="four-step--option-dot">1</div>
          </div>
          <div class="four-step--option" v-on:click="showSlide('steps', 2)" v-bind:class="{ 'active': stepsSlideNumber === 2 }">
            <div class="four-step--option-dot">2</div>
          </div>
          <div class="four-step--option" v-on:click="showSlide('steps', 3)" v-bind:class="{ 'active': stepsSlideNumber === 3 }">
            <div class="four-step--option-dot">3</div>
          </div>
          <div class="four-step--option" v-on:click="showSlide('steps', 4)" v-bind:class="{ 'active': stepsSlideNumber === 4 }">
            <div class="four-step--option-dot">4</div>
          </div>
        </div>
        <div class="four-step--slides">
          <div class="four-step--slide" v-show="stepsSlideNumber === 1">
            <h2 class="uppercase track-out mt0">Site Survey and Evaluation</h2>
            <p>LSi conducts a comprehensive site visit to survey existing equipment and evaluate an incumbant building management systems.</p>
            <p>A variety of factors are considered, such as:</p>
            <div class="four-step--factors">
              <div class="four-step--factor">
                <div class="four-step--icon four-step--icon__time"></div>
                <p class="four-step--icon-text text-brand-blue">Operation Hours</p>
              </div>
              <div class="four-step--factor">
                <div class="four-step--icon four-step--icon__people"></div>
                <p class="four-step--icon-text text-brand-blue">Number of Tenants</p>
              </div>
              <div class="four-step--factor">
                <div class="four-step--icon four-step--icon__measure"></div>
                <p class="four-step--icon-text text-brand-blue">Square Footage</p>
              </div>
              <div class="four-step--factor">
                <div class="four-step--icon four-step--icon__moon"></div>
                <p class="four-step--icon-text text-brand-blue">After Hours Usage &amp; Billing</p>
              </div>
              <div class="four-step--factor">
                <div class="four-step--icon four-step--icon__date"></div>
                <p class="four-step--icon-text text-brand-blue">Past 12 Months of Energy Bills</p>
              </div>
            </div>
          </div>
          <div class="four-step--slide" v-show="stepsSlideNumber === 2">
            <h2 class="uppercase track-out">Energy Star Calculations</h2>
            <p>We then utilize Portfolio Manager to calculate the facility’s Engergy Star Rating.</p>
            <img class="four-step--energy-star" src="/wp-content/themes/logical-solutions/images/energy-star.svg" alt="Energy Star Calculations">
          </div>
          <div class="four-step--slide" v-show="stepsSlideNumber === 3">
            <h2 class="uppercase track-out">Recommendations</h2>
            <p>Recommendations for score improvement are made. </p>
          </div>
          <div class="four-step--slide" v-show="stepsSlideNumber === 4">
            <h2 class="uppercase track-out">Certification and Approval</h2>
            <p>When Energy Star Rating is achieved, LSi can assist in certification and processing of approved paperwork.</p>
          </div>
          <a href="/case-studies" class="four-step--slides-btn btn btn__blue">View Projects</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="image-section bg-cool-light-grey">
  <div class="image-section--image image-section--image__wide image-section--image__right">
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/Homepage_ProductSliders_WebCTRLSystems.jpg')" v-show="productSlideNumber === 1">
      <p class="featured-products--image-text">Doloremque laudantium, totam rem aperiam, eaqu e ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/Homepage_ProductSliders_ECO-ScreenKiosk.jpg')" v-show="productSlideNumber === 2">
      <p class="featured-products--image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veniam accusamus non ducimus, pariatur fugit harum quod.</p>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/Homepage_ProductSliders_EnergyReportsPackage.jpg')" v-show="productSlideNumber === 3">
      <p class="featured-products--image-text">Nisi odit inventore id dolores possimus sint tempore dignissimos, saepe quas eveniet. Veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  <div class="container">
    <h3 class="section-title section-title__banner image-section--title">Featured Products</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="capabilities--options">
          <div class="capabilities--option" v-on:click="showSlide('product', 1)" v-bind:class="{ 'active': productSlideNumber === 1 }">
            <div class="featured-products--option-dot featured-products--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text uppercase">WebCTRL System</h4>
          </div>
          <div class="capabilities--option" v-on:click="showSlide('product', 2)" v-bind:class="{ 'active': productSlideNumber === 2 }">
            <div class="featured-products--option-dot featured-products--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text uppercase">Roi Analysis</h4>
          </div>
          <div class="capabilities--option" v-on:click="showSlide('product', 3)" v-bind:class="{ 'active': productSlideNumber === 3 }">
            <div class="featured-products--option-dot featured-products--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text uppercase">Leed</h4>
          </div>
        </div>
        <a href="#" class="btn btn__blue">View All Products</a>
      </div>
    </div>
  </div>
</section>



<section class="section-md">
  <div class="container">
    <h3 class="section-title section-title__right section-title__banner image-section--title">An Industry Expert</h3>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div v-show="industrySlideNumber === 1">
          <h3 class="text-bold mt0">Logical Solutions keeps our clients apprised of the latest regulatory changes, legislative updates, and energy incentives in the industry.</h3>
          <br>
          <h3>We provide one simple solution for integration and control of HVAC, electrical, fire, security, emergency generators, computer rooms, and other building systems. We have exceeded expectations within a variety of markets.</h3>
        </div>
        <div v-show="industrySlideNumber === 2">
          <h3 class="text-bold mt0"> ipsum dolor sit amet, consectetur adipisicing elit. Commodi, quasi, a. Fugit labore voluptatibus eos commodi, adipisci molestiae voluptatem pariatur nisi repudiandae. Ullam fugit, similique, animi modi error voluptatum consequuntur.</h3>
          <br>
          <h3>Ea, eligendi tempore voluptate, libero sunt nihil distinctio molestias aperiam quae placeat eaque labore, qui quo voluptatem deleniti? Dolorem doloribus voluptas accusamus.</h3>
        </div>
        <div v-show="industrySlideNumber === 3">
          <h3 class="text-bold mt0">Ea, vitae possimus, numquam cupiditate atque id, illo dolorum ipsum exercitationem debitis doloribus hic sint delectus inventore rerum iste. Ut, repellendus, iusto.</h3>
          <br>
          <h3>Nemo repellendus, dolore non, odit architecto ratione excepturi maiores est suscipit eaque magni nulla dolorum quaerat asperiores similique ab laborum possimus tempore!</h3>
        </div>
        <div v-show="industrySlideNumber === 4">
          <h3 class="text-bold mt0">Ea, vitae possimus, numquam cupiditate atque id, illo dolorum ipsum exercitationem debitis doloribus hic sint delectus inventore rerum iste. Ut, repellendus, iusto.</h3>
          <br>
          <h3>Nemo repellendus, dolore non, odit architecto ratione excepturi maiores est suscipit eaque magni nulla dolorum quaerat asperiores similique ab laborum possimus tempore!</h3>
        </div>
      </div>
      <div class="col-xs-12 col-md-5 col-md-offset-1">
        <div class="capabilities--options">
          <div class="capabilities--option" @click="showSlide('industry', 1)" v-bind:class="{ 'active': industrySlideNumber === 1 }">
            <div class="featured-products--option-dot"></div>
            <h4 class="capabilities--option-text uppercase">Expertise</h4>
          </div>
          <div class="capabilities--option" @click="showSlide('industry', 2)" v-bind:class="{ 'active': industrySlideNumber === 2 }">
            <div class="featured-products--option-dot"></div>
            <h4 class="capabilities--option-text uppercase">Going Green</h4>
          </div>
          <div class="capabilities--option" @click="showSlide('industry', 3)" v-bind:class="{ 'active': industrySlideNumber === 3 }">
            <div class="featured-products--option-dot"></div>
            <h4 class="capabilities--option-text uppercase">ROI ANALYSIS</h4>
          </div>
          <div class="capabilities--option" @click="showSlide('industry', 4)" v-bind:class="{ 'active': industrySlideNumber === 4 }">
            <div class="featured-products--option-dot"></div>
            <h4 class="capabilities--option-text uppercase">LEED</h4>
          </div>
        </div>
        <a href="/capabilities" class="btn btn__blue">View Capabilities</a>
      </div>
    </div>
  </div>
</section>



<section class="image-section bg-cool-light-grey">
  <div class="image-section--image image-section--image__wide image-section--image__right">
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/CaseStudies_Homepage_ChaseTower.jpg')" v-show="caseSlideNumber === 1">
      <p class="featured-products--image-text">Doloremque laudantium, totam rem aperiam, eaqu e ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div class="featured-products--image" style="background-image: url('/wp-content/uploads/2016/09/CaseStudy_GarlandISD.jpg')" v-show="caseSlideNumber === 2">
      <p class="featured-products--image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veniam accusamus non ducimus, pariatur fugit harum quod.</p>
    </div>
  </div>
  <div class="container">
    <h3 class="section-title section-title__banner image-section--title">Case Studies</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="capabilities--options">
          <div class="capabilities--option" v-on:click="showSlide('case', 1)" v-bind:class="{ 'active': caseSlideNumber === 1 }">
            <div class="featured-products--option-dot featured-products--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text uppercase">Chase Tower Building</h4>
          </div>
          <div class="capabilities--option" v-on:click="showSlide('case', 2)" v-bind:class="{ 'active': caseSlideNumber === 2 }">
            <div class="featured-products--option-dot featured-products--option-dot__cool-grey"></div>
            <h4 class="capabilities--option-text uppercase">Garland ISD</h4>
          </div>
        </div>
        <a href="#" class="case-studies--btn btn btn__blue">See All Case Studies</a>
      </div>
    </div>
  </div>
</section>


<section class="section-md repeatable-building-bg">
  <div class="container">
    <h3 class="section-title section-title__right section-title__banner image-section--title">Awards</h3>
    <div class="home-awards">
      <div class="home-award">
        <img class="home-award--image" src="/wp-content/uploads/2016/09/award-1.jpg" alt="">
        <div class="home-award--info">
          <p class="text-center">
            Automated Logic Awarded 2009<br>Product of the Year by Consulting<br>Specifying Engineer
          </p>
        </div>
      </div>
      <div class="home-award">
        <img class="home-award--image" src="/wp-content/uploads/2016/09/award-2.jpg" alt="">
        <div class="home-award--info">
          <p class="text-center">
            WebCTRL Receives BTL Advanced<br>Workstation Software<br>Certification
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
