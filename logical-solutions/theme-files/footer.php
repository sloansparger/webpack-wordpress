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

  <?php if (!is_page('contact')) { ?>
	<div class="subfooter">
		<div class="container">
			<div class="subfooter--text">
        <p class="track-out">Let us help you find a logical solution</p>
     </div>
     <a class="cta cta__white" href="/contact/">Contact Us</a>
		</div>
	</div>
  <?php } ?>

	<footer id="footer" class="footer" role="contentinfo">
		<div class="container">
			<div class="row hidden-xs hidden-sm">
				<div class="col-md-1">
          <img class="footer--logo" src="/wp-content/themes/logical-solutions/images/brand-assets/lsi-old-logo.svg" alt="LSi logo" />
				</div>
				<div class="col-md-2">
          <address class="footer--addr mb0 text-white">
            407 International Pkwy<br/>
            Suite 406<br/>
            Richardson, Texas 75081<br/>
          </address>
        </div>
        <div class="col-md-2">
          <div class="footer--tel">
            <a class="footer--links" href="tel:+9724375500">Tel: 972.437.5500</a>
            <a class="footer--links" href="fax:+9724373318">Fax: 972.437.3318</a>
          </div>
        </div>
				<div class="col-md-1 col-md-offset-1">
					<a class="footer--links" href="/services">Services</a>
					<a class="footer--links" href="/careers">Careers</a>
				</div>
				<div class="col-md-1">
					<a class="footer--links" href="/case-studies">Past Work</a>
					<a class="footer--links" href="/products">Products</a>
				</div>
				<div class="col-md-1">
					<a class="footer--links" href="/resources">Resources</a>
					<a class="footer--links" href="/training">Training</a>
				</div>
				<div class="col-md-1">
					<a class="footer--links" href="/privacy-policy">Privacy Policy</a>
				</div>
			</div>
			<p class="footer--copyright">&copy; <?php the_time('Y') ?> Logical Solutions Inc., All Rights Reserved</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcFRGMrmbt-ApltFYRzrLGMpnnCCS_hH8&callback=initMap" async defer></script>
</body>
</html>
