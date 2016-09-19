<?php
/* Template Name: Inner Page */
get_header('grey');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="section-md section__lead">
				<div class="container">
					<?php
						echo '<h1 class="section-title">' . get_the_title() . '</h1>';
						echo '<p>' . get_page(get_the_ID())->post_content . '</p>';
					?>

				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
