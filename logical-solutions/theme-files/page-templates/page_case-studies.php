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

		<section class="section-md bg-cool-light-grey">
			<blockquote class="text-center">
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed<br>
				do eiusmod tempor incididunt ut labore et dolore magna”
			</blockquote>
		</section>

		<div class="studies">
			<section class="studies--study">
				<div class="studies--image studies--image__right"></div>
				<div class="container">
					<h3 class="section-title studies--title">8333 Douglas</h3>
					<div class="row">
						<div class="col-md-6">
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
						</div>
					</div>
				</div>
			</section>

			<section class="studies--study">
				<div class="studies--image"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h3 class="section-title studies--title studies--title__right">8333 Douglas</h3>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
						</div>
					</div>
				</div>
			</section>

			<section class="studies--study">
				<div class="studies--image studies--image__right"></div>
				<div class="container">
					<h3 class="section-title studies--title">8333 Douglas</h3>
					<div class="row">
						<div class="col-md-6">
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
						</div>
					</div>
				</div>
			</section>

			<section class="studies--study">
				<div class="studies--image"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h3 class="section-title studies--title studies--title__right">8333 Douglas</h3>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a href="#" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
						</div>
					</div>
				</div>
			</section>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
