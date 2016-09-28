<?php
/*
Template Name: Products
*/
get_header();
?>
<div id="app">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) { the_post(); get_template_part( '/template-parts/hero' ); } ?>

      <?php
        $hardwarePosts = new WP_Query( array( 'post_type' => 'lsi_product', 'cat' => 12, 'posts_per_page' => -1));
        $softwarePosts = new WP_Query( array( 'post_type' => 'lsi_product', 'cat' => 11, 'posts_per_page' => -1));
      ?>

			<section class="section-md" id="products">

				<div class="container">
					<h3 class="section-title">Software</h3>
					<div class="products">
						<?php if ( $softwarePosts->have_posts() ) : while ( $softwarePosts->have_posts() ) : $softwarePosts->the_post(); ?>

						<div class="product">
							<div class="product--image"  style="background-image: url(<?php echo wp_get_attachment_image_src(get_field('image'), 'medium')[0]; ?>)">
								<div class="product--overlay"></div>
								<h3 class="product--name text-white"><?php echo the_title() ?></h3>
								<button class="product--learn-more btn btn__white" @click="openModal('<?php echo the_title() ?>', '<?php echo wp_get_attachment_image_src(get_field('image'), 'full')[0]; ?>', '<?php the_field('description'); ?>')">
									Learn More
								</button>
							</div>
							<div class="product--info-container">
								<h5 class="product--info text-white"><?php echo substr(get_field('description'), 0, 100); ?></h5>
							</div>
						</div>

						<?php	endwhile; endif; ?>

            <div class="products--contact-btn-container">
              <a class="btn btn__blue products--contact-btn uppercase" href="/contact/">Contact Us</a>
            </div>

					</div>
				</div>

				<div class="container">
					<h3 class="section-title">Hardware</h3>
					<div class="products">

						<?php if ( $hardwarePosts->have_posts() ) : while ( $hardwarePosts->have_posts() ) : $hardwarePosts->the_post(); ?>

							<div class="product">
								<div class="product--image"  style="background-image: url(<?php echo wp_get_attachment_image_src(get_field('image'), 'medium')[0]; ?>)">
									<div class="product--overlay"></div>
									<h3 class="product--name text-white"><?php echo the_title() ?></h3>
									<button class="product--learn-more btn btn__white" @click="openModal('<?php echo the_title() ?>', '<?php echo wp_get_attachment_image_src(get_field('image'), 'full')[0]; ?>', '<?php the_field('description'); ?>')">
										Learn More
									</button>
								</div>
								<div class="product--info-container">
									<h5 class="product--info text-white"><?php echo substr(get_field('description'), 0, 100); ?></h5>
								</div>
							</div>

						<?php	endwhile; endif; ?>

            <div class="products--contact-btn-container">
              <a class="btn btn__blue products--contact-btn uppercase" href="/contact/">Contact Us</a>
            </div>

					</div>
				</div>

			</section>

			<div class="modal" v-bind:class="{'modal__open': modalOpen}">
				<div class="container relative">
	        <div class="modal--exit" @click="closeModal"></div>
	      </div>
				<div class="container">
          <h3 class="section-title">{{currentTitle}}</h3>
				</div>
				<div class="container">

					<div class="product--modal-content">
						<div class="product--modal-image" style="background-image: url({{currentImage}})"></div>

						<div class="product--modal-description">
							<p>{{currentDescription}}</p>
							<a href="/contact#contact" class="product--modal-cta btn btn__blue uppercase">Contact Us</a>
						</div>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
