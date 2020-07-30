<div class="domain-form-warp<?php if($bottomSearchForm) echo " bottom"; ?>">
    <form class="domain-search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" placeholder="<?= __('Co Ci się przyśniło?') ?>" name="s" class="search-auto-complete">
        <button class="site-btn"><?= __('Szukaj'); ?></button>
    </form>
    <p><?= __('Jeśli nie możesz odnaleźć swojego snu, spróbuj użyć pokrewnych fraz, innych słów lub synonimów.'); ?></p>
</div>