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
        <a href="#" class="overlay__icon icon">
            <picture><source srcset="<?= getImage('bh.webp')?>" type="image/webp"><img class="icon__image" src="<? getImage('bh.png') ?>"></picture>
        </a>
        <a href="#" class="overlay__icon icon">
            <picture><source srcset="<? getImage('inst.webp') ?>" type="image/webp"><img class="icon__image" src="<? getImage('inst.png') ?>"></picture>
        </a>
        <a href="#" class="overlay__icon icon">
            <picture><source srcset="<? getImage('mail.webp') ?>" type="image/webp"><img class="icon__image" src="<? getImage('mail.png') ?>"></picture>
        </a>
        <a href="#" class="overlay__icon icon">
            <picture><source srcset="<? getImage('in.webp') ?>" type="image/webp"><img class="icon__image" src="<? getImage('in.png') ?>"></picture>
        </a>
    </div>
    <div class="overlay__language">RU</div>
</div>