<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

	<!-- Banner section -->
	<section class="banner-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/banner-bg.svg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 banner-text text-white">
					<h3><?= __('Chciałbyś porozmawiać z wróżką lub wróżbitą?'); ?></h3>
					<p><?= __('Potrzebujesz dogłębnej analizy swojego snu? Ciekawi Cię Twoja przyszłość? Droczy Cię jakaś kwestia związana z miłością, zdrowiem lub pieniędzmi? Wybróbuj naszą nową funkcjonalność, jaką rozmowa online z wróżką lub wróżbitą!'); ?></p>
				</div>
				<div class="col-lg-4 text-left text-lg-right">
					<a href="<?= get_field('wrozba_link', get_option( 'page_on_front' ))?:'#'; ?>" class="site-btn"><?= __('Odbierz darmowe pytanie do wróżki!'); ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner section end -->
	
	<!-- Footer top section -->
	<section class="footer-top-section text-white spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget about-widget">
						<a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/img/logo-white.svg" alt="logo"></a>
						<!-- <p>Proin gravida nibh vel velit auctor aliquet, aenean sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet, aenean sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum</p> -->
						<div class="fw-social social">
							<!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
							<a href="https://www.facebook.com/SennikInternetowy" target="_blank"><i class="fa fa-facebook"></i></a>
							<!-- <a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title"><?= __('Ostatnie artykuły'); ?></h4>
						<?php
						$dreamCategory = get_term_by('slug', 'sen', 'category');
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => '3',
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
							'category__not_in' => $dreamCategory->term_id
						);
						$the_query = new WP_Query( $args );

						if($the_query->have_posts()):
						?>
						<div class="fw-latest-post-widget">
							<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<div class="lp-item">
								<a href="<?= get_permalink(); ?>">
									<div class="lp-thumb set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/cloud-dream.svg"></div>
									<div class="lp-content">
										<h6><?= get_the_title(); ?></h6>
										<span><?= get_the_date(); ?></span>
									</div>
								</a>
							</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title"><?= __('Mapa witryny'); ?></h4>
						<div class="row">
							<div class="col-sm-6">
								<?php
								if(has_nav_menu('menu_footer')):
									wp_nav_menu(
										array(
											'theme_location' => 'menu_footer',
											'container' => false,
											'menu_class' => null,
											'menu_id' => null
										)
									);
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="copyright">Copyright &copy; 2014 - <script>document.write(new Date().getFullYear());</script> All rights reserved</div>
		</div>
	</footer>
	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?= get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/circle-progress.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v8.0&appId=170120483161667&autoLogAppEvents=1" nonce="eODqkXJq"></script>

	<!-- Adsense -->
	<script data-ad-client="ca-pub-7466642798380021" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46121409-8"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-46121409-8');
	</script>
	<!-- The END Google Analytics -->

	</body>
</html>
