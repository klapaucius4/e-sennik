<!-- Domain search section -->
<section class="domain-search-section spad__70 set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/blue-bg.svg">
    <div class="container">
        <div class="section-title st-white">
            <img src="<?= get_template_directory_uri(); ?>/img/section-title-icon-light.svg" alt="">
            <p><?= __('Wpisz frazę związaną z tym, o czym ostatnio śniłeś/aś') ?></p>
            <h2><?= __('Znajdź znaczenie snu'); ?></h2>
        </div>
        <?php
            $bottomSearchForm = true;
            include(locate_template('template-parts/search-form.php'));
        ?>
    </div>
</section>
<!-- Domain search section end -->