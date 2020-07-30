<!-- Page Top section -->
<section class="page-top-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/blue-bg.svg">
    <div class="container">
        <h2>Blog</h2>
        <div class="site-breadcrumb">
            <a href="home">Home</a> / <span>Blog</span>
        </div>
    </div>
</section>
<!-- Page Top section end -->

<?php get_template_part('template-parts/letters'); ?>

<!-- Blog posts section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title">
			<img src="http://e-sennik2.localhost/wp-content/themes/e-sennik/img/section-title-icon-light.svg" alt="">
			<p>Sny na literę</p>
			<h2>"S"</h2>
		</div>
        <div class="row">
            <div class="col-lg-9">
            <?php
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            // $args = array(
            //     'post_type' => 'post',
            //     'paged' => $paged,
            //     'posts_per_page' => get_option( 'posts_per_page' )
            // );
            // $myQuery = new WP_Query($args);


            // query_posts(
            //     array(
            //         'order' => 'ASC',
            //         'orderby' => 'title',
            //     )
            // );
            while(have_posts()): the_post();
            ?>
                <div class="blog-post">
                    <?php /*<img src="<?= get_template_directory_uri(); ?>/img/blog/1.jpg" alt="" class="post-thumb">*/ ?>
                    <!-- <div class="post-date">Oct 25, 2018</div> -->
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
                    <?php the_excerpt(); ?>
                    <a href="#"><div class="post-date mt-2"><?= __('Zobacz więcej'); ?></div></a>
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