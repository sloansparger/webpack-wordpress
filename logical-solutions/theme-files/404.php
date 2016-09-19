<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Logical_Solutions
 */

get_header('grey'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="section__404 m0">

					<div class="container">
						<div class="fourzerofour">
							<h1 class="fourzerofour--title text-brand-dark-blue text-bold">404</h1>
							<p class="fourzerofour--text">
								Sorry, but the page you are looking for cannot be found.<br class="fourzerofour--break">
								We’re working on a logical solution for this problem.
							 </p>
						</div>
					</div>

			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
