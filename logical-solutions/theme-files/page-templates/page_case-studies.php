<?php
/*
Template Name: Case Study
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( '/template-parts/hero' );
		}
		?>

		<section class="blurb-section bg-cool-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
						<blockquote class="text-center">
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna”
						</blockquote>
					</div>
				</div>
			</div>
		</section>

		<div class="studies">
			<section class="image-section">
				<div class="image-section--image image-section--image__right"></div>
				<div class="container">
					<h3 class="section-title image-section--title">8333 Douglas</h3>
					<div class="row">
						<div class="col-md-6">
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="studies--btn-container">
								<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="image-section">
				<div class="image-section--image"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h3 class="section-title image-section--title image-section--title__right">8333 Douglas</h3>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="studies--btn-container">
								<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="image-section">
				<div class="image-section--image image-section--image__right"></div>
				<div class="container">
					<h3 class="section-title image-section--title">8333 Douglas</h3>
					<div class="row">
						<div class="col-md-6">
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="studies--btn-container">
								<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="image-section">
				<div class="image-section--image"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h3 class="section-title image-section--title image-section--title__right">8333 Douglas</h3>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="studies--btn-container">
								<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
