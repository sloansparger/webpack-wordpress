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
							<p class="job--category" @click="changeCatFilter('all')" v-bind:class="{'job--category__active': isCurrentFilter('all')}">
								All Categories  <span class="job--category-count">(<?php echo $totalJobs ?>)</span>
							</p>
						</div>

						<?php
						for($i = 0; $i < count($mainCategories); $i++) {
							$currentCategory = $mainCategories[$i]
							?>
							<div class="col-md-3">
								<p class="job--category"
									 @click="changeCatFilter('<?php echo strtolower($currentCategory) ?>')"
									 v-bind:class="{'job--category__active': isCurrentFilter('<?php echo strtolower($currentCategory) ?>')}"
									 >
									<?php echo $currentCategory; ?>
									<span class="job--category-count">(<?php echo $categoryCounts[$currentCategory]; ?>)</span>
								</p>
							</div>
						<?php } ?>

					</div>
					<div class="row">

						<?php if ( $jobs->have_posts() ) : while ( $jobs->have_posts() ) : $jobs->the_post();?> <!-- start nested loop -->
									<div class="col-md-4" v-show="matchesCurrentFilter('<?php echo strtolower(get_the_terms(get_the_ID(), 'job-category')[0]->name) ?>')">
										<div class="job--preview">
											<h4 class="job--preview-title mb0"><?php the_title(); ?></h4>
											<span v-text="'<?php the_date(); ?>' | timeago"></span><br>
											<p class="job--excerpt mt2"><?php
												$desc = get_field('description');
												if (strlen($desc) > 100) echo substr(get_field('description'), 0, 99) . '...';
												else echo $desc
											?></p>
											<button class="btn btn__blue btn__small" @click="toggleModal">Learn More</button>
										</div>
									</div>

						<?php endwhile; else : endif;?> <!--  end the loop -->
					</div>
				</div>
			</section>

			<!-- <modal class="modal" v-bind:class="{'modal-is-open': modalOpen}" job-title="Example Job"></modal> -->
			<modal class="modal" v-bind:class="{'modal__open': modalOpen}" title="Example Job">
				<div class="container">
					<h1 class="text-brand-blue uppercase text-thin mb4">Lorem ipsum dolor sit amet</h1>
				</div>
				<div class="container modal--content">
					<div class="row">
						<div class="col-md-6">
							<p class="text-bold text-brand-green mt0 mb4">Job Description</p>
							<div class="job--description">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue. In ac ipsum ac nunc auctor interdum at sit amet mi. Vivamus lectus ipsum, hendrerit fermentum felis sit amet, placerat tristique sem. Sed gravida id risus ac blandit. Etiam luctus finibus fringilla. Maecenas vehicula, tellus nec vestibulum dapibus, ante enim viverra metus, vel sollicitudin odio risus ac ligula. Sed rutrum augue eget quam vulputate, nec consequat mi semper. Praesent commodo ullamcorper lectus vel iaculis. Vestibulum facilisis turpis purus, id aliquam nisl aliquam quis. Praesent fringilla condimentum purus, quis dapibus leo vestibulum at. Proin eget luctus purus, at vulputate ipsum.</p>
								<br/>
								<p>Phasellus et pharetra arcu. Pellentesque eu augue sed turpis aliquam cursus. Praesent maximus, orci ut lacinia rutrum, massa lacus fermentum tellus, nec varius enim lectus nec velit. Sed pharetra risus et nulla aliquet consequat. Suspendisse venenatis elit sit amet risus accumsan, et molestie enim efficitur. Integer eget cursus nisl. In ut ullamcorper ex. Morbi vitae imperdiet sapien, sit amet sollicitudin.</p>
								<br/>
								<p>Phasellus et pharetra arcu. Pellentesque eu augue sed turpis aliquam cursus. Praesent maximus, orci ut lacinia rutrum, massa lacus fermentum tellus, nec varius enim lectus nec velit. Sed pharetra risus et nulla aliquet consequat. Suspendisse venenatis elit sit amet risus accumsan, et molestie enim efficitur. Integer eget cursus nisl. In ut ullamcorper ex. Morbi vitae imperdiet sapien, sit amet sollicitudin.</p>
								<br/>
								<p>Phasellus et pharetra arcu. Pellentesque eu augue sed turpis aliquam cursus. Praesent maximus, orci ut lacinia rutrum, massa lacus fermentum tellus, nec varius enim lectus nec velit. Sed pharetra risus et nulla aliquet consequat. Suspendisse venenatis elit sit amet risus accumsan, et molestie enim efficitur. Integer eget cursus nisl. In ut ullamcorper ex. Morbi vitae imperdiet sapien, sit amet sollicitudin.</p>
								<br/>
								<p>Phasellus et pharetra arcu. Pellentesque eu augue sed turpis aliquam cursus. Praesent maximus, orci ut lacinia rutrum, massa lacus fermentum tellus, nec varius enim lectus nec velit. Sed pharetra risus et nulla aliquet consequat. Suspendisse venenatis elit sit amet risus accumsan, et molestie enim efficitur. Integer eget cursus nisl. In ut ullamcorper ex. Morbi vitae imperdiet sapien, sit amet sollicitudin.</p>
								<br/>
								<p>Phasellus et pharetra arcu. Pellentesque eu augue sed turpis aliquam cursus. Praesent maximus, orci ut lacinia rutrum, massa lacus fermentum tellus, nec varius enim lectus nec velit. Sed pharetra risus et nulla aliquet consequat. Suspendisse venenatis elit sit amet risus accumsan, et molestie enim efficitur. Integer eget cursus nisl. In ut ullamcorper ex. Morbi vitae imperdiet sapien, sit amet sollicitudin.</p>
							</div>
						</div>
						<div class="col-md-5 col-md-offset-1">
							<p class="text-bold text-brand-green mb4">Job Requirements</p>
							<ul class="job--requirements">
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
								<li class="job--requirement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum aliquet congue.</li>
							</ul>
						</div>
					</div>
				</div>

			</modal>

		<?php endwhile; else : endif;?> <!--  end the loop -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
