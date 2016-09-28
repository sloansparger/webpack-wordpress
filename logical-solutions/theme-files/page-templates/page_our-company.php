<?php
/*
Template Name: Our Company
*/
get_header();
?>
<div id="app">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( '/template-parts/hero' );
				}

				$employees = new WP_Query( array( 'post_type' => 'lsi_employees', 'posts_per_page' => -1));
				// $count = 0;
				// if ( $capabilities->have_posts() ) : while ( $capabilities->have_posts() ) : $capabilities->the_post();
				// $desc = get_field('description', false, false);
				// $includes = get_field('includes', false, false);
			?>

			<section class="section-md">
				<div class="container">
					<h3 class="section-title">Since 1995</h3>
					<p class="split-paragraph">LSi has enjoyed a partnership with a dynamic and innovative company - Automated Logic Corporation (ALC).  leader in the industry for over two decades, ALC continues to be at the forefront of innovative technologies. ALC and LSi - an outstanding combination for innovative building control!<br><br>Now, LSi has partnered with Lenel – the world’s number one provider of electronic access control. With OnGuard, solutions are at your fingertips for systems integration: from card reader and camera installation, to software configuration and integration with third party components, your building has never been so powerful.</p>
				</div>
			</section>

			<section class="section-lg bg-cool-light-grey">
				<div class="container">
					<div class="awards--stray-line"></div>
					<div class="awards">
						<div class="award">
							<img class="award--image" src="<?php echo wp_get_attachment_image_src(get_field('award_1'), 'full')[0]; ?>" alt="">
							<p class="text-center">
								Automated Logic Awarded 2009<br>Product of the Year by Consulting<br>Specifying Engineer
							</p>
						</div>
						<div class="award">
							<img class="award--image" src="<?php echo wp_get_attachment_image_src(get_field('award_2'), 'full')[0]; ?>" alt="">
							<p class="text-center">
								WebCTRL Receives BTL Advanced<br>Workstation Software<br>Certification
							</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section-md repeatable-building-bg">
				<div class="container">
					<h3 class="section-title section-title__right">Our Team</h3>
					<div class="team-members">
						<?php
							if ( $employees->have_posts() ) : while ( $employees->have_posts() ) : $employees->the_post();
							$jobTitle = get_field('job_title', false, false);
							$imageId = get_field('profile_image', false, false);
						?>

						<div class="team-member">
							<img class="team-member--image" src="<?php echo wp_get_attachment_image_src($imageId, 'full')[0]; ?>" alt="">
							<div class="team-member--info">
								<h4 class="team-member--name"><?php the_title(); ?></h4>
								<h5 class="team-member--position"><?php echo $jobTitle; ?></h5>
							</div>
						</div>

						<?php endwhile; else: endif;?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
