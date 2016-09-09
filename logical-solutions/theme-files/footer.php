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
     <a class="cta cta__white" href="/contact/">Contact Us</a>
		</div>
	</div>
	<footer id="footer" class="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-3 hidden-sm hidden-xs">
          <div class="footer--logo">
            <!--<img src="https://placehold.it/80x40" alt="" />-->
            <img src="/wp-content/themes/logical-solutions/images/brand-assets/lsi-old-logo.svg" alt="LSi logo" />
          </div>
          <div class="footer--addr">
            <p>407 International Pkwy</p>
            <p>Suite 406</p>
            <p>Richardson, Texas 75081</p>
          </div>
        </div>
        <div class="col-md-2 hidden-sm hidden-xs">
          <div class="footer--tel">
            <a class="footer--links"href="tel:+9724375500">Tel: 972.437.5500</a>
            <a class="footer--links"href="tel:+9724373318">Fax: 972.437.3318</a>
          </div>
        </div>
				<div class="col-md-1 hidden-sm hidden-xs">
					<a class="footer--links"href="#">Services</a>
					<a class="footer--links"href="#">Careers</a>
				</div>
				<div class="col-md-1 hidden-sm hidden-xs">
					<a class="footer--links"href="#">Past Work</a>
					<a class="footer--links"href="#">Products</a>
				</div>
				<div class="col-md-1 hidden-sm hidden-xs">
					<a class="footer--links"href="#">Resources</a>
					<a class="footer--links"href="#">Training</a>
				</div>
				<div class="col-md-1 hidden-sm hidden-xs">
					<a class="footer--links"href="#">Privacy Policy</a>
				</div>
				<div class="col-md-12">
					<div class="footer--copyright">
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
