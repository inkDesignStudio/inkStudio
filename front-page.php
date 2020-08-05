<?php get_header(); ?>

<?php
//$postsQuery = query([
//    'type' => 'post',
//    'identifier_required' => false,
//    'limit' => 4
//]);
?>

<main>
    <?php get_template_part('components/preloader/preloader'); ?>
    <?php get_template_part('components/marquee/marquee'); ?>
    <?php get_template_part('components/portfolio/portfolio'); ?>
    <?php get_template_part('components/marquee/marquee'); ?>
    <?php get_template_part('components/services/services'); ?>
</main>
<?php get_footer(); ?>
