<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<section class="spad">
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">404</span>
                    <div class="mb-4 lead"><?= __('Nie odnaleziono strony...') ?></div>
                    <a href="<?= home_url(); ?>" class="site-btn"><?= __('Wróć do strony głównej'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();