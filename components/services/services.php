<section id="services" class="section services">
    <?php
    $query = new WP_Query([
        'post_type' => 'services',
        'post_per_page' => 1
    ]);
    $posts = $query->posts;
    foreach ( $posts as $post ):
    $id = $post->ID;
    $serviceFirst = get_post_meta($id, 'wpcf-services-service-first', true);
    $serviceSecond = get_post_meta($id, 'wpcf-services-service-second', true);
    $serviceThird = get_post_meta($id, 'wpcf-services-service-third', true);

    $serviceFirstPrepaymentA = get_post_meta($id, 'wpcf-services-service-first-prepayment-a', true);
    $serviceFirstVariantsA = get_post_meta($id, 'wpcf-services-service-first-variants-a', true);
    $serviceFirstTermsA = get_post_meta($id, 'wpcf-services-service-first-terms-a', true);
    $serviceFirstCorrectionsA = get_post_meta($id, 'wpcf-services-service-first-corrections-a', true);
    $serviceFirstPriceA = get_post_meta($id, 'wpcf-services-service-first-price-a', true);

    $serviceFirstPrepaymentB = get_post_meta($id, 'wpcf-services-service-first-prepayment-b', true);
    $serviceFirstVariantsB = get_post_meta($id, 'wpcf-services-service-first-variants-b', true);
    $serviceFirstTermsB = get_post_meta($id, 'wpcf-services-service-first-terms-b', true);
    $serviceFirstCorrectionsB = get_post_meta($id, 'wpcf-services-service-first-corrections-b', true);
    $serviceFirstPriceB = get_post_meta($id, 'wpcf-services-service-first-price-b', true);

    $serviceFirstPrepaymentC = get_post_meta($id, 'wpcf-services-service-first-prepayment-c', true);
    $serviceFirstVariantsC = get_post_meta($id, 'wpcf-services-service-first-variants-c', true);
    $serviceFirstTermsC = get_post_meta($id, 'wpcf-services-service-first-terms-c', true);
    $serviceFirstCorrectionsC = get_post_meta($id, 'wpcf-services-service-first-corrections-c', true);
    $serviceFirstPriceC = get_post_meta($id, 'wpcf-services-service-first-price-c', true);

    $serviceSecondPrepaymentA = get_post_meta($id, 'wpcf-services-service-second-prepayment-a', true);
    $serviceSecondVariantsA = get_post_meta($id, 'wpcf-services-service-second-variants-a', true);
    $serviceSecondTermsA = get_post_meta($id, 'wpcf-services-service-second-terms-a', true);
    $serviceSecondCorrectionsA = get_post_meta($id, 'wpcf-services-service-second-corrections-a', true);
    $serviceSecondPriceA = get_post_meta($id, 'wpcf-services-service-second-price-a', true);

    $serviceSecondPrepaymentB = get_post_meta($id, 'wpcf-services-service-second-prepayment-b', true);
    $serviceSecondVariantsB = get_post_meta($id, 'wpcf-services-service-second-variants-b', true);
    $serviceSecondTermsB = get_post_meta($id, 'wpcf-services-service-second-terms-b', true);
    $serviceSecondCorrectionsB = get_post_meta($id, 'wpcf-services-service-second-corrections-b', true);
    $serviceSecondPriceB = get_post_meta($id, 'wpcf-services-service-second-price-b', true);

    $serviceSecondPrepaymentC = get_post_meta($id, 'wpcf-services-service-second-prepayment-c', true);
    $serviceSecondVariantsC = get_post_meta($id, 'wpcf-services-service-second-variants-c', true);
    $serviceSecondTermsC = get_post_meta($id, 'wpcf-services-service-second-terms-c', true);
    $serviceSecondCorrectionsC = get_post_meta($id, 'wpcf-services-service-second-corrections-c', true);
    $serviceSecondPriceC = get_post_meta($id, 'wpcf-services-service-second-price-c', true);

    $serviceThirdPrepaymentA = get_post_meta($id, 'wpcf-services-service-third-prepayment-a', true);
    $serviceThirdVariantsA = get_post_meta($id, 'wpcf-services-service-third-variants-a', true);
    $serviceThirdTermsA = get_post_meta($id, 'wpcf-services-service-third-terms-a', true);
    $serviceThirdCorrectionsA = get_post_meta($id, 'wpcf-services-service-third-corrections-a', true);
    $serviceThirdPriceA = get_post_meta($id, 'wpcf-services-service-third-price-a', true);

    $serviceThirdPrepaymentB = get_post_meta($id, 'wpcf-services-service-third-prepayment-b', true);
    $serviceThirdVariantsB = get_post_meta($id, 'wpcf-services-service-third-variants-b', true);
    $serviceThirdTermsB = get_post_meta($id, 'wpcf-services-service-third-terms-b', true);
    $serviceThirdCorrectionsB = get_post_meta($id, 'wpcf-services-service-third-corrections-b', true);
    $serviceThirdPriceB = get_post_meta($id, 'wpcf-services-service-third-price-b', true);

    $serviceThirdPrepaymentC = get_post_meta($id, 'wpcf-services-service-third-prepayment-c', true);
    $serviceThirdVariantsC = get_post_meta($id, 'wpcf-services-service-third-variants-c', true);
    $serviceThirdTermsC = get_post_meta($id, 'wpcf-services-service-third-terms-c', true);
    $serviceThirdCorrectionsC = get_post_meta($id, 'wpcf-services-service-third-corrections-c', true);
    $serviceThirdPriceC = get_post_meta($id, 'wpcf-services-service-third-price-c', true);

    ?>
    <script>
        let serviceFirst = '<?php echo $serviceFirst?>';
        let serviceSecond = '<?php echo $serviceSecond?>';
        let serviceThird = '<?php echo $serviceThird?>';

        let serviceFirstPrepaymentA = '<?php echo $serviceFirstPrepaymentA?>';
        let serviceFirstVariantsA = '<?php echo $serviceFirstVariantsA?>';
        let serviceFirstTermsA = '<?php echo $serviceFirstTermsA?>';
        let serviceFirstCorrectionsA = '<?php echo $serviceFirstCorrectionsA?>';
        let serviceFirstPriceA = '<?php echo $serviceFirstPriceA?>';

        let serviceFirstPrepaymentB = '<?php echo $serviceFirstPrepaymentB?>';
        let serviceFirstVariantsB = '<?php echo $serviceFirstVariantsB?>';
        let serviceFirstTermsB = '<?php echo $serviceFirstTermsB?>';
        let serviceFirstCorrectionsB = '<?php echo $serviceFirstCorrectionsB?>';
        let serviceFirstPriceB = '<?php echo $serviceFirstPriceB?>';

        let serviceFirstPrepaymentC = '<?php echo $serviceFirstPrepaymentC?>';
        let serviceFirstVariantsC = '<?php echo $serviceFirstVariantsC?>';
        let serviceFirstTermsC = '<?php echo $serviceFirstTermsC?>';
        let serviceFirstCorrectionsC = '<?php echo $serviceFirstCorrectionsC?>';
        let serviceFirstPriceC = '<?php echo $serviceFirstPriceC?>';

        let serviceSecondPrepaymentA = '<?php echo $serviceSecondPrepaymentA?>';
        let serviceSecondVariantsA = '<?php echo $serviceSecondVariantsA?>';
        let serviceSecondTermsA = '<?php echo $serviceSecondTermsA?>';
        let serviceSecondCorrectionsA = '<?php echo $serviceSecondCorrectionsA?>';
        let serviceSecondPriceA = '<?php echo $serviceSecondPriceA?>';

        let serviceSecondPrepaymentB = '<?php echo $serviceSecondPrepaymentB?>';
        let serviceSecondVariantsB = '<?php echo $serviceSecondVariantsB?>';
        let serviceSecondTermsB = '<?php echo $serviceSecondTermsB?>';
        let serviceSecondCorrectionsB = '<?php echo $serviceSecondCorrectionsB?>';
        let serviceSecondPriceB = '<?php echo $serviceSecondPriceB?>';

        let serviceSecondPrepaymentC = '<?php echo $serviceSecondPrepaymentC?>';
        let serviceSecondVariantsC = '<?php echo $serviceSecondVariantsC?>';
        let serviceSecondTermsC = '<?php echo $serviceSecondTermsC?>';
        let serviceSecondCorrectionsC = '<?php echo $serviceSecondCorrectionsC?>';
        let serviceSecondPriceC = '<?php echo $serviceSecondPriceC?>';

        let serviceThirdPrepaymentA = '<?php echo $serviceThirdPrepaymentA?>';
        let serviceThirdVariantsA = '<?php echo $serviceThirdVariantsA?>';
        let serviceThirdTermsA = '<?php echo $serviceThirdTermsA?>';
        let serviceThirdCorrectionsA = '<?php echo $serviceThirdCorrectionsA?>';
        let serviceThirdPriceA = '<?php echo $serviceThirdPriceA?>';

        let serviceThirdPrepaymentB = '<?php echo $serviceThirdPrepaymentB?>';
        let serviceThirdVariantsB = '<?php echo $serviceThirdVariantsB?>';
        let serviceThirdTermsB = '<?php echo $serviceThirdTermsB?>';
        let serviceThirdCorrectionsB = '<?php echo $serviceThirdCorrectionsB?>';
        let serviceThirdPriceB = '<?php echo $serviceThirdPriceB?>';

        let serviceThirdPrepaymentC = '<?php echo $serviceThirdPrepaymentC?>';
        let serviceThirdVariantsC = '<?php echo $serviceThirdVariantsC?>';
        let serviceThirdTermsC = '<?php echo $serviceThirdTermsC?>';
        let serviceThirdCorrectionsC = '<?php echo $serviceThirdCorrectionsC?>';
        let serviceThirdPriceC = '<?php echo $serviceThirdPriceC?>';

    </script>
    <div class="services__container">
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title"><?php echo $serviceFirst ?></h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/a.png" alt="A">
                    <h3 class="services__title services__title_prepayment">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">1 вариант</p>
                    <p class="services__subtitle services__subtitle_term">2-4 дня</p>
                    <p class="services__subtitle services__subtitle_reworks">2 правки</p>
                    <h3 class="services__title services__title_price">от 100$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title"><?php echo $serviceSecond ?></h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/b.png" alt="B">
                    <h3 class="services__title services__title_prepayment">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">3 варианта</p>
                    <p class="services__subtitle services__subtitle_term">4-7 дней</p>
                    <p class="services__subtitle services__subtitle_reworks">5 правок</p>
                    <h3 class="services__title services__title_price">от 200$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title"><?php echo $serviceThird ?></h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/c.png" alt="C">
                    <h3 class="services__title services__title_prepayment">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">5 варианта</p>
                    <p class="services__subtitle services__subtitle_term">7-12 дней</p>
                    <p class="services__subtitle services__subtitle_reworks">7 правок</p>
                    <h3 class="services__title services__title_price">от 400$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <script src="<?= get_template_directory_uri() ?>/components/services/js/services.js"></script>
</section>
<?php get_template_part('components/services--contact-form/services--contact-form'); ?>