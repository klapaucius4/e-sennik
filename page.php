<?php
if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

while(have_posts()): the_post();
?>

	<section class="about-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 about-text">
					<?php the_content(); ?>
				</div>
				<!-- <div class="col-lg-6">
					<img src="./img/about.jpg" alt="">
				</div> -->
			</div>
		</div>
	</section>

<?php
endwhile;
get_footer();