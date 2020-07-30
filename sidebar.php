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