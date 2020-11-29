<?php get_template_part('template-parts/letters'); ?>

<!-- Blog posts section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title">
			<img src="http://e-sennik2.localhost/wp-content/themes/e-sennik/img/section-title-icon-light.svg" alt="">
            <?php if($category):
                $parentCategory = get_term_by('id', $category->parent, $category->taxonomy);
                if($parentCategory && $parentCategory->slug == 'sen'): ?>
                    <p><?= __('Sny na literę'); ?></p>
                    <h2><q><?= $category->name; ?></q></h2>
                <?php else: ?>
                    <h2><?= $category->name; ?></h2>
                <?php endif; ?>
            <?php elseif(is_home()): ?>
                <h2><?= get_the_title(get_option('page_for_posts')); ?></h2>
            <?php else: ?>
                <h2><?= get_the_title(); ?></h2>
            <?php endif; ?>
		</div>
        <div class="row">
            <div class="col-lg-9">
            <?php
            while(have_posts()): the_post();
            ?>
                <div class="blog-post">
                    <h4><a href="<?php the_permalink(); ?>"><?= the_title(); ?></a></h4>
                    <div class="post-metas"></div>
                </div>
            <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>

            
            <div class="site-pagination">
                <?php bootstrap_pagination(); ?>
                <!-- <a href="" class="active">01.</a>
                <a href="">02.</a>
                <a href="">03</a> -->
            </div>

            </div>
            <?php get_sidebar('sidebar'); ?>
        </div>
    </div>
</section>
<!-- Footer top section end -->