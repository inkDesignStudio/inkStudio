<?php $lang = pll_current_language() ?>
<div class="overlay">
    <div class="overlay__container">
        <?php
            $locations = get_nav_menu_locations();
            $menu_id = $locations['menu-overlay'];
            $menu_items = wp_get_nav_menu_items($menu_id);
            foreach( $menu_items as $menu_item):
                ?>
            <a href="<?php echo $menu_item->url; ?>" class="overlay__link"><?php echo $menu_item->title; ?></a>
        <?php endforeach; ?>
    </div>
    <div class="overlay__icons">
        <?php get_template_part('components/socials-list/socials-list'); ?>
    </div>
    <div class="overlay__language">
        <?php if ($lang === 'en'): ?>
            <a href="<?= pll_home_url( $lang ) ?>" class="language__switch">EN</a>
            <a href="<?= pll_home_url( 'ru' ); ?>" class="inactive language__switch">RU</a>
        <?php  elseif( $lang === 'ru' ): ?>
            <a href="<?= pll_home_url( $lang ); ?>" class="language__switch">RU</a>
            <a href="<?= pll_home_url( 'en' ); ?>" class="inactive language__switch">EN</a>
        <?php endif?>
    </div>
</div>