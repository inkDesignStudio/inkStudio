<section class="section marquee">
    <div class="marquee__container">
        <?php if( is_active_sidebar('second-marquee')
        ): ?>
            <span class="marquee__text">
            <?php
            for ($i = 0; $i < 8; $i++){
                dynamic_sidebar('second-marquee');
                echo '&nbsp';
            }
            ?>
        </span>
        <?php endif;?>
    </div>
</section>