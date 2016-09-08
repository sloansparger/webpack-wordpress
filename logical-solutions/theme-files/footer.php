<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logical_Solutions
 */

?>

	</div><!-- #content -->
	<div class="subfooter">
		<div class="container">
			<div class="subfooter--text">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</p>
			 </div>
			 <a href="/contact/" class="subfooter--btn">Contact Us</a>
		</div>
	</div>
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-footer--logo">
						<img src="https://placehold.it/80x40" alt="" />
					</div>
					<div class="site-footer--address">
						<p>407 International Pkwy</p>
						<p>Suite 406</p>
						<p>Richardson, Texas 75081</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="site-footer--tel">
						<a href="tel:+9724375500">972.437.5500</a>
						<a href="tel:+9724373318">972.437.3318</a>
					</div>
				</div>
				<div class="col-md-2">
					<a href="#">Services</a>
					<a href="#">Careers</a>
				</div>
				<div class="col-md-2">
					<a href="#">Past Work</a>
					<a href="#">Products</a>
				</div>
				<div class="col-md-2">
					<a href="#">Resources</a>
					<a href="#">Training</a>
				</div>
				<div class="col-md-1">
					<a href="#">Privacy Policy</a>
				</div>
				<div class="col-md-12">
					<div class="site-footer--copyright">
						<p>
							&copy; <?php the_time('Y') ?> Logical Solutions Inc., All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
