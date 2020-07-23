<?php get_header();

while(have_posts()): the_post();
?>

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/bg.svg">
		<div class="container h-100">
			<div class="hero-content text-white">
				<div class="row w-100">
					<div class="col-lg-6 pr-0">
						<h1>Sennik Online</h1>
						<p class="mb-2">Wyszukaj znaczenie swoich snów w naszej internetowej księdze snów.</p>
						<!-- <a href="#" class="site-btn dark">Znajdź swój sen</a> -->
						<div class="domain-form-warp">
							<form class="domain-search-form">
								<input type="text" placeholder="Co Ci się śniło?" class="search-auto-complete d-block w-100">
								<button class="site-btn d-block dark mt-3">Znajdź sen</button>
							</form>
						</div>
					</div>
					<!-- <div class="col-lg-5"></div> -->
				</div>
				<div class="hero-rocket">
					<img src="<?= get_template_directory_uri(); ?>/img/birds.svg" alt="<?= __('Księżyc'); ?>">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Skills & testimonials section -->
	<section class="skills-and-testimonials-section spad">
		<div class="container">
			<div class="row">
				<!-- Skills -->
				<div class="col-lg-6">
					<?php the_content(); ?>
				</div>
				<!-- Testimonials -->
				<div class="col-lg-6">
					<?php
					$args = array(
						'post_type' => 'es_curiosity',
						'post_status' => 'publish',
						'posts_per_page' => -1
					);
					$myQuery = new WP_Query($args);

					if($myQuery->have_posts()):
					?>
					<div class="testimonials-slider owl-carousel">
						<?php while($myQuery->have_posts()): $myQuery->the_post(); ?>
						<div class="testimonial-item">
							<div class="ti-content">
								<p><?= nl2br(get_field('tresc')); ?></p>
							</div>
							<div class="ti-author-pic set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/curiosity.svg"></div>
							<div class="ti-author">
								<h6><?= __('Czy wiesz że...'); ?></h6>
								<span><?= __('Ciekawostka'); ?></span>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Skills & testimonials section end -->

<?php /*
	<!-- Domain search section -->
	<section class="domain-search-section spad set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/blue-bg.svg">
		<div class="container">
			<div class="section-title st-white">
				<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon-light.svg" alt="">
				<p>The best out there</p>
				<h2>See our features</h2>
			</div>
			<div class="domain-form-warp">
				<form class="domain-search-form">
					<input type="text" placeholder="Enter your website’s name" class="search-auto-complete">
					<button class="site-btn">Search</button>
				</form>
				<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis</p>
			</div>
		</div>
	</section>
	<!-- Domain search section end -->
*/ ?>
	<?php get_template_part('template-parts/letters'); ?>


<?php
endwhile;
get_footer();