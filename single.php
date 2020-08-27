<?php get_header();
$image_first =  get_post_meta($post->ID, "wpcf-work-image-first", true);
$image_second = get_post_meta($post->ID, "wpcf-work-image-second", true);
$image_third =  get_post_meta($post->ID, "wpcf-work-image-third", true);
$image_fourth = get_post_meta($post->ID, "wpcf-work-image-fourth", true);
$image_fifth =  get_post_meta($post->ID, "wpcf-work-image-fifth", true);
$video_first =  get_post_meta($post->ID, "wpcf-work-video-first", true);
$video_second = get_post_meta($post->ID, "wpcf-work-video-second", true);
$video_third =  get_post_meta($post->ID, "wpcf-work-video-third", true);
$video_fourth = get_post_meta($post->ID, "wpcf-work-video-fourth", true);
$video_fifth =  get_post_meta($post->ID, "wpcf-work-video-fifth", true);
?>
<main style="line-height: 0;">
    <div class="portfolio__work">
        <?php if (!empty($video_first)) { ?>
            <video playsinline autoplay muted loop class="portfolio__image">
                <source src="<?= $video_first ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php if (!empty($image_first)) { ?>
            <img class='portfolio__image'  src="<?php echo $image_first ?>">
        <?php } ?>

        <?php if (!empty($video_second)) { ?>
            <video playsinline autoplay muted loop class="portfolio__image">
                <source src="<?= $video_second ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php if (!empty($image_second)) { ?>
            <img class='portfolio__image'  src="<?php echo $image_second ?>">
        <?php } ?>

        <?php if (!empty($video_third)) { ?>
            <video playsinline autoplay muted loop class="portfolio__image">
                <source src="<?= $video_third ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php if (!empty($image_third)) { ?>
            <img class='portfolio__image'  src="<?php echo $image_third ?>">
        <?php } ?>

        <?php if (!empty($video_fourth)) { ?>
            <video playsinline autoplay muted loop class="portfolio__image">
                <source src="<?= $video_fourth ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php if (!empty($image_fourth)) { ?>
            <img class='portfolio__image'  src="<?php echo $image_fourth ?>">
        <?php } ?>

        <?php if (!empty($video_fifth)) { ?>
            <video playsinline autoplay muted loop class="portfolio__image">
                <source src="<?= $video_fifth ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php if (!empty($image_fifth)) { ?>
            <img class='portfolio__image'  src="<?php echo $image_fifth ?>">
        <?php } ?>
    </div>
</main>
<?php get_template_part('components/marquee-second/marquee-second'); ?>
<?php get_template_part('components/services/services'); ?>
<?php get_footer(); ?>
