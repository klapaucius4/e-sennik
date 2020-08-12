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
                <a href="<?= get_the_permalink(); ?>">
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
    <!-- widget -->
    <div class="sb-widget">
        <h2 class="sb-title"><?= __('A może śniłeś o...?'); ?></h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'orderby' => 'rand',
        );
        $myQuery = new WP_Query($args);

        if($myQuery->have_posts()):
        ?>
        <ul>
            <?php while($myQuery->have_posts()): $myQuery->the_post(); ?>
                <li><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <div class="sb-widget">
        <h2 class="sb-title"><?= __('Tagi'); ?></h2>
        <div class="sb-tag-widget">
            <?php wp_tag_cloud(); ?>
            <!-- <a href="">development</a>
            <a href="" class="big-tag">SEO</a>
            <a href="">website</a>
            <a href="">hosting</a>
            <a href="">tips</a>
            <a href="">coding</a>
            <a href="">video</a>
            <a href="">marketing</a>
            <a href="">analizing</a> -->
        </div>
    </div>
    <div class="sb-widget">
        <a href="" class="add">
            <!-- <img src="<?= get_template_directory_uri(); ?>/img/add.jpg" alt="#"> -->
        </a>
    </div>
</div>