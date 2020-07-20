<!-- Features section -->
<section class="features-section spad">
	<div class="container">
		<div class="section-title">
			<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon-dark.svg" alt="">
			<p>Alfabetyczny spis snów</p>
			<h2>Znajdź swój sen</h2>
		</div>
		<div class="row justify-content-md-center">
			<?php
			$alphabet = get_terms( array(
				'taxonomy' => 'category',
				'hide_empty' => false,
				'parent' => get_term_by('slug', 'sen', 'category')->term_id
				)
			);
			?>
			<?php foreach($alphabet as $letter): ?>
			<div class="col-lg-1 col-md-2 col-sm-3 col-4 feature-item">
				<a href="<?= get_term_link($letter->term_id, $letter->taxonomy); ?>">
					<div class="ft-icon"><?= $letter->name; ?></div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- Features section end -->