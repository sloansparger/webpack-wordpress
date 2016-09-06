<?php
/* Template Name: Inner Page w/ Transparent Header */
get_header('');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="page-hero">
				<div class="page-hero--image" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
				<div class="container">
					<div class="row">
						<h1 class="page-hero--title uppercase"><?php the_title(); ?></h1>
						<h4 class="page-hero--blurb"><?php echo get_post_meta( get_the_ID(), 'custom_description' )[0]; ?></h4>
					</div>
				</div>
			</div>


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
