<?php get_header(); ?>
<div class="portfolio__margin_top"></div>
<section id="portfolio" class="section portfolio">
    <div class="portfolio__grid">
        <?php
        $query = new WP_Query([
            'cat=5',
        ]);
        $posts = $query->posts;
        foreach ( $posts as $post ):
            $id = $post->ID;
            $title = $post->post_title;
            $subtitle = $post->post_content;
            $videoPreview = get_post_meta($id, 'wpcf-work-video-preview', true);

            ?>
            <?php if ( has_post_thumbnail( $id ) === true ) { ?>
            <div class="grid__item">
                <img class="grid__preview grid__preview_img" src="<?php echo the_post_thumbnail_url($id, 'full'); ?>">
                <div class="item__inner">
                    <?php if (!empty($title)) { ?>
                        <h2 class="item__title title"><?php echo $title  ?></h2>
                    <?php } ?>
                    <?php if (!empty($subtitle)) { ?>
                        <p class="item__subtitle subtitle"><?php echo $subtitle  ?></p>
                        <a href="<?php echo get_the_permalink($id); ?>" class="item__btn btn">
                            подробнее
                        </a>
                    <?php } ?>
                </div>
            </div>
        <?php } elseif ( has_post_thumbnail($id) === false ) { ?>
            <div class="grid__item">
                <video playsinline autoplay muted loop class="grid__preview grid__preview_vid">
                    <source src="<?= $videoPreview ?>" type="video/mp4">
                </video>
                <div class="item__inner">
                    <?php if (!empty($title)) { ?>
                        <h2 class="item__title title"><?php echo $title  ?></h2>
                    <?php } ?>
                    <?php if (!empty($subtitle)) { ?>
                        <p class="item__subtitle subtitle"><?php echo $subtitle  ?></p>
                        <a href="<?php echo get_permalink($id); ?>" class="item__btn btn">подробнее</a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php endforeach; ?>
    </div>
    <script></script>
</section>
<?php get_footer(); ?>
