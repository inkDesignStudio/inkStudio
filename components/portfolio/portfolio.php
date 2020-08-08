<section id="portfolio" class="section portfolio">
    <div class="portfolio__grid">
        <?php
            $terms = get_terms([
                    'taxonomy' => 'works-category',
                    'hide_empty' => true
            ]);
            foreach ( $terms as $term):
        ?>
            <?php
                $query = new WP_Query([
                        'post_type' => 'works',
                        'post_per_page' => 6,
                        'work-category' => $term->slug
                ]);
                $posts = $query->posts;
                foreach ( $posts as $post ):
                    $id = $post->ID;
                    $title = $post->post_title;
                    $subtitle = get_post_meta($id, 'wpcf-work-subtitle', true);
                    $videoPreview = get_post_meta($id, 'wpcf-work-video-preview', true);
            ?>
                    <?php if ( has_post_thumbnail( $id ) === true ) { ?>
                        <div class="grid__item">
                            <img class="grid__preview grid__preview_img" src="<?php echo the_post_thumbnail_url($id, 'full'); ?>'">
                            <div class="item__inner">
                                <h2 class="item__title title"><?php echo $title  ?></h2>
                                <p class="item__subtitle subtitle"><?php echo $subtitle  ?></p>
                                <a href="<?php echo get_permalink($id); ?>" class="item__btn btn">подробнее</a>
                            </div>
                        </div>
                     <?php } elseif ( has_post_thumbnail($id) === false ) { ?>
                        <div class="grid__item">
                            <video playsinline autoplay muted loop class="grid__preview grid__preview_vid">
                                <source src="<?= $videoPreview ?>" type="video/mp4">
                            </video>
                            <div class="item__inner">
                                <h2 class="item__title title"><?php echo $title  ?></h2>
                                <p class="item__subtitle subtitle"><?php echo $subtitle  ?></p>
                                <a href="<?php echo get_permalink($id); ?>" class="item__btn btn">подробнее</a>
                            </div>
                        </div>
                     <?php } ?>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <script></script>
</section>