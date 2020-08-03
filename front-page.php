<?php get_header(); ?>

<?php
//$postsQuery = query([
//    'type' => 'post',
//    'identifier_required' => false,
//    'limit' => 4
//]);
?>

<main>
   <section id="main" class="section full_width">
      <div class="preloader_container">
         <div class="preloader_box">
            <img src="<?= get_template_directory_uri() ?>/img/src/preload.png" class="preloader_ring">
         </div>
         <div class="smile"></div>
      </div>
   </section>
   <section class="section">

   </section>
   <section id="portfolio" class="section">
      <div class="portfolio_grid">
         <a href="item.html"><div class="portfolio__grid_item">
               <div class="portfolio__inner">
                  <h2 class="portfolio__title">Aasdasdsa asdasdas</h2>
                  <p class="portfolio_desc">asdasdaslfkdlfkslmalksdmaslkfmlasmdlsakd</p>
               </div>
            </div></a>
         <div class="portfolio__grid_item"></div>
         <div class="portfolio__grid_item"></div>
         <div class="portfolio__grid_item"></div>
         <div class="portfolio__grid_item"></div>
         <div class="portfolio__grid_item"></div>
      </div>
   </section>
   <section class="section">
      <div class="marquee">
         <h2 class="marquee_img_1">пакет услуг пакет услуг пакет услуг пакет услуг пакет услуг пакет услуг</h2>
         <h2 class="marquee_img_2">пакет услуг пакет услуг пакет услуг пакет услуг пакет услуг пакет услуг</h2>
      </div>
   </section>
   <section id="services" class="section services">
      <div class="services_grid">
         <div class="service unselected">
            <h2>лого</h2>
            <div class="service_inner service_a">
               <img class="srv_img" src="img/a.png">
               <h2>предоплата 50%</h2>
               <div class="srv_desc">
                  <h3>1 вариант</h3>
                  <h3>2-4 дня</h3>
                  <h3>2 правки</h3>
               </div>
               <h2>от 100$</h2>
               <div class="btn srv a">обсудить задачу</div>
            </div>
            <div class="service_unactive"></div>
         </div>
         <div class="service unselected">
            <h2>фирменный стиль</h2>
            <div class="service_inner service_b">
               <img class="srv_img" src="<?= get_template_directory_uri() ?>/img/src/b.png">
               <h2>предоплата 50%</h2>
               <div class="srv_desc">
                  <h3>3 вариант</h3>
                  <h3>4-7 дней</h3>
                  <h3>5 правок</h3>
               </div>
               <h2>от 200$</h2>
               <div class="btn srv b">обсудить задачу</div>
            </div>
            <div class="service_unactive"></div>
         </div>
         <div class="service unselected">
            <h2>сайт</h2>
            <div class="service_inner service_c">
               <img class="srv_img" src="img/c.png">
               <h2>предоплата 50%</h2>
               <div class="srv_desc">
                  <h3>5 вариант</h3>
                  <h3>7-12 дней</h3>
                  <h3>7 правок</h3>
               </div>
               <h2>от 400$</h2>
               <div class="btn srv c">обсудить задачу</div>
            </div>
            <div class="service_unactive"></div>
         </div>
      </div>
   </section>
</main>
<?php get_footer(); ?>
