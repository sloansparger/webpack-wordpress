<?php
/* Template Name: Inner Page w/ Transparent Header */
get_header('');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="page-hero">
				<div class="page-hero--image" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
				<div class="container">
					<h1 class="page-hero--title uppercase"><?php the_title(); ?></h1>
					<h4 class="page-hero--blurb"><?php echo get_post_meta( get_the_ID(), 'custom_description' )[0]; ?></h4>
				</div>
			</div>


			<section class="section-md">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="section-title">Since 1995</h3>
							<p class="split-paragraph">LSi has enjoyed a partnership with a dynamic and innovative company - Automated Logic Corporation (ALC).  leader in the industry for over two decades, ALC continues to be at the forefront of innovative technologies. ALC and LSi - an outstanding combination for innovative building control!<br><br>Now, LSi has partnered with Lenel – the world’s number one provider of electronic access control. With OnGuard, solutions are at your fingertips for systems integration: from card reader and camera installation, to software configuration and integration with third party components, your building has never been so powerful.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section-lg bg-light-grey">
				<div class="container">
					<div class="awards">
						<div class="award">
							<img class="award--image" src="http://fillmurray.com/g/300/150" alt="">
							<p class="text-center">
								Automated Logic Awarded 2009<br>Product of the Year by Consulting<br>Specifying Engineer
							</p>
						</div>
						<div class="award">
							<img class="award--image" src="http://fillmurray.com/g/300/150" alt="">
							<p class="text-center">
								WebCTRL Receives BTL Advanced<br>Workstation Software<br>Certification
							</p>
						</div>
					</div>
				</div>
			</section>


			<?php
			while ( have_posts() ) : the_post();
				// get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
