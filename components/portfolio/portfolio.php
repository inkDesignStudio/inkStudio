<section id="portfolio" class="section portfolio">
    <div class="portfolio__grid">
        <?php
            $terms = get_terms([
               'taxonomy' => 'works-category',
                'hide_empty' => true
            ]);
            foreach ( $terms as $term ):
        ?>
            <div class="item__inner">
                <h2 class="item__title title"><?php echo $term->name; ?></h2>
                <p class="item__subtitle subtitle"></p>
                <a href="item.html" class="item__btn btn"></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>