<footer class="footer">
    <div class="footer__inner">
        <div class="footer__rights">
            <picture><source srcset="<?= get_template_directory_uri() ?>/img/dest/logo.webp" type="image/webp"><img class="footer__logo logo" src="<?= get_template_directory_uri() ?>/img/dest/logo.png"></picture>
            <picture><source srcset="<?= get_template_directory_uri() ?>/img/dest/footer__rights.webp" type="image/webp"><img src="<?= get_template_directory_uri() ?>/img/dest/footer__rights.png" alt="2020 все права защищены" class="footer__image"></picture>
        </div>
        <div class="footer__icons">
            <?php get_template_part('components/socials-list/socials-list'); ?>
        </div>
        <div class="footer__contact">
            <?php if( is_active_sidebar('contacts-sidebar')
            ) {
                dynamic_sidebar('contacts-sidebar');
            }
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>