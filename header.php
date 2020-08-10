<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>>">
    <title><?php echo wp_get_document_title(); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__inner">
        <div class="header__logo_container">
            <a href="<? echo home_url(); ?>"><picture><source srcset="<?= getImage('logo.webp') ?>" type="image/webp"><img class="header__logo logo" src="<?= getImage('logo.png') ?>"></picture></a>
            <a href="<? echo home_url(); ?>""><div class="header__title title active"></div></a>
            <div class="header__line line active"></div>
        </div>
        <nav class="header__menu menu" role="navigation">
            <div class="menu__toggle">
                <span class="menu__span"></span>
                <span class="menu__span"></span>
                <span class="menu__span"></span>
            </div>
        </nav>
    </div>
    <?php wp_head(); ?>
</header>
<script>
    let themePath = '<?= get_template_directory_uri() ?>';
</script>
<?php get_template_part('components/overlay/overlay'); ?>


