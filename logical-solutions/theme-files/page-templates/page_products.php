<?php
/*
Template Name: Products
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
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
