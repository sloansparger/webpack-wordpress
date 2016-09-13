<?php
/*
Template Name: Careers
*/
get_header();
?>
<div id="jobs">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- start main loop -->

			<?php	get_template_part( '/template-parts/hero' ); ?>

			<?php $jobs = new WP_Query( array( 'post_type' => 'lsi_job ' ) );
						$allCategories = [];
						$totalJobs = 0;
						if ( $jobs->have_posts() ) : while ( $jobs->have_posts() ) : $jobs->the_post();
							array_push($allCategories, get_the_terms(get_the_ID(), 'job-category')[0]->name);
							$totalJobs++;
						$categoryCounts = array_count_values($allCategories);
						$mainCategories = array_values(array_unique($allCategories));
						endwhile; else : endif;
			?>

			<section class="section-md">
				<div class="container">
					<h3 class="section-title">Open Positions</h3>
					<div class="row mb10">
						<div class="col-md-3">
							<a href="#" class="job--category job--category__active">All Categories  <span class="job--category-count">(<?php echo $totalJobs ?>)</span></a>
						</div>

						<?php
						for($i = 0; $i < count($mainCategories); $i++) { ?>
							<div class="col-md-3">
								<a href="#" class="job--category">
									<?php echo $mainCategories[$i]; ?>
									<span class="job--category-count">(<?php echo $categoryCounts[$mainCategories[$i]]; ?>)</span>
								</a>
							</div>
						<?php } ?>

					</div>
					<div class="row">

						<?php if ( $jobs->have_posts() ) : while ( $jobs->have_posts() ) : $jobs->the_post();?> <!-- start nested loop -->
									<div class="col-md-4">
										<div class="job--preview">
											<h4 class="job--preview-title mb0"><?php the_title(); ?></h4>
											<span v-text="'<?php the_date(); ?>' | timeago"></span><br>
											<p class="job--excerpt mt2"><?php
												$desc = get_field('description');
												if (strlen($desc) > 100) echo substr(get_field('description'), 0, 99) . '...';
												else echo $desc
											?></p>
											<button class="btn btn__blue btn__small">Learn More</button>
										</div>
									</div>

						<?php endwhile; else : endif;?> <!--  end the loop -->
					</div>
				</div>
			</section>

		<?php endwhile; else : endif;?> <!--  end the loop -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
