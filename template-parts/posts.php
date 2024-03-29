<!-- Blog posts section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title">
			<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon-light.svg" alt="">
            <?php
                $term = get_queried_object();
                if($term->taxonomy):
                    $parentTerm = get_term_by('id', $term->parent, $term->taxonomy);
                    if($parentTerm && $parentTerm->slug == 'sen'): ?>
                        <p><?= __('Sny na literę'); ?></p>
                        <h2><q><?= $term->name; ?></q></h2>
                <?php else: 
                    
                    if ( is_category() ) {
                        $title = single_cat_title( '', false );
                        $subTitle = __('Kategoria').': ';
                    } elseif ( is_tag() ) {
                        $title = single_tag_title( '', false );
                        $subTitle = __('Tag').': ';
                    } elseif ( is_post_type_archive() ) {
                        $title = post_type_archive_title( '', false );
                    } elseif ( is_tax() ) {
                        $title = single_term_title( '', false );
                    }
                    
                    ?>
                    <?php if($subTitle): ?><p><?= $subTitle; ?></p><?php endif; ?>
                    <h2><?= $title; ?></h2>
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
            // query_posts('orderby=title&order=ASC');
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

<?php get_template_part('template-parts/bottom-search-form'); ?>

<?php get_template_part('template-parts/letters'); ?>