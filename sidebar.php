<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!-- sidebar -->
<div class="col-lg-3 col-md-5 col-sm-8 sidebar">
    <!-- widget -->
    <div class="sb-widget">
        <form class="sb-search-widget" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" name="s" class="search-auto-complete">
            <button><?= __('Wyszukaj'); ?></button>
        </form>
    </div>
    <!-- widget -->
    <div class="sb-widget">
        <h2 class="sb-title"><?= __('Ostatnio dodane sny'); ?></h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $myQuery = new WP_Query($args);

        if($myQuery->have_posts()):
        ?>
        <div class="sb-latest-post-widget">
            <?php while($myQuery->have_posts()): $myQuery->the_post(); ?>
            <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/footer-thumb/1.jpg"></div>
                <div class="lp-content">
                    <h6><?= get_the_title(); ?></h6>
                    <span><?= get_the_date(); ?></span>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
    </div>
    <!-- widget -->
    <div class="sb-widget">
        <h2 class="sb-title"><?= __('Ostatnio dodane sny'); ?>:</h2>
        
        <ul>
            <li><a href="">Development</a></li>
            <li><a href="">SEO</a></li>
            <li><a href="">Tips & Triks</a></li>
            <li><a href="">Hosting</a></li>
        </ul>
    </div>
    <div class="sb-widget">
        <h2 class="sb-title">Tag</h2>
        <div class="sb-tag-widget">
            <a href="">development</a>
            <a href="" class="big-tag">SEO</a>
            <a href="">website</a>
            <a href="">hosting</a>
            <a href="">tips</a>
            <a href="">coding</a>
            <a href="">video</a>
            <a href="">marketing</a>
            <a href="">analizing</a>
        </div>
    </div>
    <div class="sb-widget">
        <a href="" class="add">
            <img src="<?= get_template_directory_uri(); ?>/img/add.jpg" alt="#">
        </a>
    </div>
</div>