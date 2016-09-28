<?php
/*
Template Name: Case Study
*/
get_header();
?>
<div id="app">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( '/template-parts/hero' );
        $body_text = get_field('body_text');
        $case_study_1_name = get_field('case_study_1_name');
        $case_study_1_text = get_field('case_study_1_text');
        $case_study_1_image = get_field('case_study_1_image');
        $case_study_1_pdf = get_field('case_study_1_pdf');
        $case_study_2_name = get_field('case_study_2_name');
        $case_study_2_text = get_field('case_study_2_text');
        $case_study_2_image = get_field('case_study_2_image');
        $case_study_2_pdf = get_field('case_study_2_pdf');
        $case_study_3_name = get_field('case_study_3_name');
        $case_study_3_text = get_field('case_study_3_text');
        $case_study_3_image = get_field('case_study_3_image');
        $case_study_3_pdf = get_field('case_study_3_pdf');
      ?>

			<section class="blurb-section bg-cool-light-grey">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
							<blockquote class="text-center"><?php echo $body_text; ?>
							</blockquote>
						</div>
					</div>
				</div>
			</section>

			<div class="studies">
				<section class="image-section">
					<div class="image-section--image image-section--image__right">
            <img src="<?php echo wp_get_attachment_image_src($case_study_1_image, 'full')[0]; ?>">
          </div>
					<div class="container">
						<h3 class="section-title image-section--title"><?php echo $case_study_1_name; ?></h3>
						<div class="row">
							<div class="col-md-6">
								<p class=""><?php echo $case_study_1_text; ?></p>
								<div class="studies--btn-container">
									<a href="<?php echo $case_study_1_pdf; ?>" class="studies--btn btn btn__blue">View Full Case Study PDF</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="image-section">
					<div class="image-section--image">
            <img src="<?php echo wp_get_attachment_image_src($case_study_2_image, 'full')[0]; ?>">
          </div>
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-6">
                <h3 class="section-title image-section--title"><?php echo $case_study_2_name; ?></h3>
								<p class=""><?php echo $case_study_2_text; ?></p>
								<div class="studies--btn-container">
									<a href="<?php echo $case_study_2_pdf; ?>" class="studies--btn btn btn__blue" download>View Full Case Study PDF</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="image-section">
					<div class="image-section--image">
            <img src="<?php echo wp_get_attachment_image_src($case_study_3_image, 'full')[0]; ?>">
          </div>
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-6">
                <h3 class="section-title image-section--title"><?php echo $case_study_3_name; ?></h3>
								<p class=""><?php echo $case_study_3_text; ?></p>
								<div class="studies--btn-container">
									<a href="<?php echo $case_study_3_pdf; ?>" class="studies--btn btn btn__blue" download>View Full Case Study PDF</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>


      <?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
