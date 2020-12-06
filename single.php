<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<section class="blog-section spad">
    <div class="container">
    <?php while(have_posts()): the_post(); ?>
        <div class="section-title">
			<img src="http://e-sennik2.localhost/wp-content/themes/e-sennik/img/section-title-icon-light.svg" alt="">
            <h2><?= get_the_title(); ?></h2>
		</div>
        <div class="row">
            <div class="col-lg-9">

                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post">
                            <!-- <img src="<?= get_template_directory_uri(); ?>/img/blog/1.jpg" alt="" class="post-thumb"> -->
                            <div class="post-date"><?= get_the_date(); ?></div>
                            <h4><a href="<?php the_permalink(); ?>"><?= the_title(); ?></a></h4>
                            <div class="post-metas">
                                <!-- <div class="post-meta">By Admin</div> -->
                                <div class="post-meta">
                                <?php
                                    if(get_the_tag_list()) {
                                        echo "Tagi: " . get_the_tag_list('',', ','');
                                    }
                                ?>
                                </div>
                                <!-- <div class="post-meta">3 comments</div> -->
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                <?php
                    $tags = get_the_tags();
                    $tagsIDs = array();
                    foreach($tags as $tag){
                        $tagsIDs[] = $tag->term_id;
                    }
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        'tag__in' => $tagsIDs,
                        'orderby' => 'rand',
                    );
                    $myQuery = new WP_Query($args);
                    if($myQuery->have_posts()): ?>
                    <div class="col-md-12">
                        <h6 class="mb-4">Podobne sny:</h6>
                        <?php while($myQuery->have_posts()): $myQuery->the_post(); ?>
                        <div class="blog-post">
                            <h4><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h4>
                            <div class="post-metas"></div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 mb-3">
                        <h5><?= __('Komentarze:'); ?></h5>
                    </div>
                    <div class="col-md-12">
                        <div class="fb-comments" data-href="<?= home_url( $wp->request ); ?>" data-numposts="5" data-width=""></div>
                    </div>
                </div>

            </div>
            <?php get_sidebar('sidebar'); ?>
        </div>
    <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
    </div>
</section>

<?php get_footer();