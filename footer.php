<footer class="footer">
    <div class="footer__inner">
        <div class="footer__rights">
            <picture><source srcset="<?= get_template_directory_uri() ?>/img/dest/logo.webp" type="image/webp"><img class="footer__logo logo" src="<?= get_template_directory_uri() ?>/img/dest/logo.png"></picture>
            <picture><source srcset="<?= get_template_directory_uri() ?>/img/dest/footer__rights.webp" type="image/webp"><img src="<?= get_template_directory_uri() ?>/img/dest/footer__rights.png" alt="2020 все права защищены" class="footer__image"></picture>
        </div>
        <div class="footer__icons">
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
        <div class="footer__contact">
            <h3 class="footer__subtitle footer__subtitle_telephone">+38 000 00 00 000</h3>
            <h3 class="footer__subtitle footer__subtitle_email">ink.studio@gmail.com</h3>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>