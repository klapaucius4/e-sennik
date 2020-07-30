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
        <div class="row">
            <div class="col-lg-9">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'paged' => $paged,
                'posts_per_page' => get_option( 'posts_per_page' )
            );
            $myQuery = new WP_Query($args);
            while($myQuery->have_posts()): $myQuery->the_post();
            ?>
                <div class="blog-post">
                    <?php /*<img src="<?= get_template_directory_uri(); ?>/img/blog/1.jpg" alt="" class="post-thumb">*/ ?>
                    <!-- <div class="post-date">Oct 25, 2018</div> -->
                    <h4><?= the_title(); ?></h4>
                    <div class="post-metas">
                        <div class="post-meta">By Admin</div>
                        <div class="post-meta">website, tips, seo</div>
                        <div class="post-meta">3 comments</div>
                    </div>
                    <?php the_excerpt(); ?>
                </div>
            <?php
            endwhile; wp_reset_postdata();
                /*
                <div class="blog-post">
                    <img src="img/blog/2.jpg" alt="" class="post-thumb">
                    <div class="post-date">Oct 25, 2018</div>
                    <h4>5 tips to buid your website</h4>
                    <div class="post-metas">
                        <div class="post-meta">By Admin</div>
                        <div class="post-meta">website, tips, seo</div>
                        <div class="post-meta">3 comments</div>
                    </div>
                    <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue.</p>
                </div>
                <div class="blog-post">
                    <img src="img/blog/3.jpg" alt="" class="post-thumb">
                    <div class="post-date">Oct 25, 2018</div>
                    <h4>5 tips to buid your website</h4>
                    <div class="post-metas">
                        <div class="post-meta">By Admin</div>
                        <div class="post-meta">website, tips, seo</div>
                        <div class="post-meta">3 comments</div>
                    </div>
                    <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue.</p>
                </div>
                */ ?>
                <div class="site-pagination">
                    <a href="" class="active">01.</a>
                    <a href="">02.</a>
                    <a href="">03</a>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-md-5 col-sm-8 sidebar">
                <!-- widget -->
                <div class="sb-widget">
                    <a href="" class="add">
                        <img src="<?= get_template_directory_uri(); ?>/img/add.jpg" alt="#">
                    </a>
                    <form class="sb-search-widget">
                        <input type="text">
                        <button>Search</button>
                    </form>
                </div>
                <!-- widget -->
                <div class="sb-widget">
                    <h2 class="sb-title">Latest Posts</h2>
                    <div class="sb-latest-post-widget">
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/1.jpg"></div>
                            <div class="lp-content">
                                <h6>Web Hosting for everyone</h6>
                                <span>Oct 21, 2018</span>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/2.jpg"></div>
                            <div class="lp-content">
                                <h6>Web Hosting for everyone</h6>
                                <span>Oct 21, 2018</span>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/3.jpg"></div>
                            <div class="lp-content">
                                <h6>Web Hosting for everyone</h6>
                                <span>Oct 21, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="sb-widget">
                    <h2 class="sb-title">Latest Posts</h2>
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
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->