<section class="section services">
    <div class="services__container">
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title">лого</h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/a.png" alt="A">
                    <h3 class="services__title">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">1 вариант</p>
                    <p class="services__subtitle services__subtitle_term">2-4 дня</p>
                    <p class="services__subtitle services__subtitle_reworks">2 правки</p>
                    <h3 class="services__title">от 100$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title">фирменный стиль</h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/b.png" alt="B">
                    <h3 class="services__title">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">3 варианта</p>
                    <p class="services__subtitle services__subtitle_term">4-7 дней</p>
                    <p class="services__subtitle services__subtitle_reworks">5 правок</p>
                    <h3 class="services__title">от 200$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
        <div class="services__card">
            <div class="services__tab"><h2 class="tab__title">сайт</h2></div>
            <div class="services__content">
                <div class="content__wrapper">
                    <img class="services__image" src="<?= get_template_directory_uri() ?>/img/dest/c.png" alt="C">
                    <h3 class="services__title">предоплата 50%</h3>
                    <p class="services__subtitle services__subtitle_variants">5 варианта</p>
                    <p class="services__subtitle services__subtitle_term">7-12 дней</p>
                    <p class="services__subtitle services__subtitle_reworks">7 правок</p>
                    <h3 class="services__title">от 400$</h3>
                    <a class="btn services__btn">обсудить задачу</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('components/services--contact-form/services--contact-form'); ?>