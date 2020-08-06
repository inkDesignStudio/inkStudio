<?php get_header();
$image_first = get_post_meta($post->ID, "wpcf-work-image-first", true);
$image_second = get_post_meta($post->ID, "wpcf-work-image-second", true);
$image_third = get_post_meta($post->ID, "wpcf-work-image-third", true);
$image_fourth = get_post_meta($post->ID, "wpcf-work-image-fourth", true);
$image_fifth = get_post_meta($post->ID, "wpcf-work-image-fifth", true);
?>
<main style="line-height: 0;">
    <div class="portfolio__work">
<?php if (!empty($image_first)) { ?>
    <img class='portfolio__image'  src="<?php echo $image_first ?>">
<?php } ?>

<?php if (!empty($image_second)) { ?>
    <img class='portfolio__image'  src="<?php echo $image_second ?>">
<?php } ?>

<?php if (!empty($image_third)) { ?>
    <img class='portfolio__image'  src="<?php echo $image_third ?>">
<?php } ?>

<?php if (!empty($image_fourth)) { ?>
    <img class='portfolio__image'  src="<?php echo $image_fourth ?>">
<?php } ?>

<?php if (!empty($image_fifth)) { ?>
    <img class='portfolio__image'  src="<?php echo $image_fifth ?>">
<?php } ?>
    </div>
</main>
<?php get_footer(); ?>
