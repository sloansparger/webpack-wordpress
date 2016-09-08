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

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
