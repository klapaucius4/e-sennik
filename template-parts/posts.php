<!-- Page Top section -->
<section class="page-top-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/blue-bg.svg">
    <div class="container">
        <h2 class="mb-2"><?php
        $frontpageId = get_option( 'page_on_front' );
        $blogId = get_option('page_for_posts');

        $category = get_queried_object();

        if(is_archive()){
            echo post_type_archive_title( '', false );
        }elseif(is_home()){
            echo get_the_title($blogId);
        }elseif(is_single()){
            echo get_the_title();
        }else{
            echo get_the_title();
        }
        ?></h2>
        <div class="site-breadcrumb">
            <a href="<?= get_the_permalink($frontpageId); ?>"><?= get_the_title($frontpageId);  ?></a>
            <?php if(is_home()): ?> / <a href="#"><?= get_the_title($blogId); ?></a><?php endif; ?>
            <?php if(is_archive()): ?> / <a href="#"><?= post_type_archive_title( '', false ); ?></a><?php endif; ?>
            <?php if(is_single()): ?> / <a href="#"><?= get_the_title(); ?></a><?php endif; ?>
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
            <?php if($category):
                $parentCategory = get_term_by('id', $category->parent, $category->taxonomy);
                if($parentCategory && $parentCategory->slug == 'sen'): ?>
                    <p><?= __('Sny na literę'); ?></p>
                    <h2><q><?= $category->name; ?></q></h2>
                <?php else: ?>
                    <h2><?= $category->name; ?></h2>
                <?php endif; ?>
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