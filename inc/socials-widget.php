<?php

class socials_list_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'social_widget', // Base ID
            __( 'Список соц.сетей', 'wptheme' ), // Name
            array( 'description' => __( 'Здесь указываем соц. сети', 'wptheme' ), ) // Args
        );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $social_url_bh = $instance[ 'social_url_bh' ];
        $social_url_inst = $instance[ 'social_url_inst' ];
        $social_url_fb = $instance[ 'social_url_fb' ];
        $social_url_li = $instance[ 'social_url_li' ];
        $social_url_tw = $instance[ 'social_url_tw' ];
        $social_url_tg = $instance[ 'social_url_tg' ];
        // Retrieve the checkbox
        if( 'on' == $instance[ 'social_checkbox_bh' ] ) : ?>
            <a href="<?= $social_url_bh ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/behance.png') ?>">
            </a>
        <?php endif; ?>
        <?php
        if( 'on' == $instance[ 'social_checkbox_inst' ] ) : ?>
            <a href="<?= $social_url_inst ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/instagram.png') ?>">
            </a>
        <?php endif; ?>
        <?php
        if( 'on' == $instance[ 'social_checkbox_fb' ] ) : ?>
            <a href="<?= $social_url_fb ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/facebook.png') ?>">
            </a>
        <?php endif; ?>
        <?php
        if( 'on' == $instance[ 'social_checkbox_li' ] ) : ?>
            <a href="<?= $social_url_li ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/linkedin.png') ?>">
            </a>
        <?php endif; ?>
        <?php
        if( 'on' == $instance[ 'social_checkbox_tw' ] ) : ?>
            <a href="<?= $social_url_tw ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/twitter.png') ?>">
            </a>
        <?php endif; ?>
        <?php
        if( 'on' == $instance[ 'social_checkbox_tg' ] ) : ?>
            <a href="<?= $social_url_tg ?>" class="overlay__icon icon">
                <img class="icon__image" src="<? getImage('socials/telegram.png') ?>">
            </a>
        <?php endif; ?>
        <?php
    }

function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'social_url_bh' ] = strip_tags( $new_instance[ 'social_url_bh' ] );
    $instance[ 'social_checkbox_bh' ] = $new_instance[ 'social_checkbox_bh' ];
    $instance[ 'social_url_inst' ] = strip_tags( $new_instance[ 'social_url_inst' ] );
    $instance[ 'social_checkbox_inst' ] = $new_instance[ 'social_checkbox_inst' ];
    $instance[ 'social_url_fb' ] = strip_tags( $new_instance[ 'social_url_fb' ] );
    $instance[ 'social_checkbox_fb' ] = $new_instance[ 'social_checkbox_fb' ];
    $instance[ 'social_url_li' ] = strip_tags( $new_instance[ 'social_url_li' ] );
    $instance[ 'social_checkbox_li' ] = $new_instance[ 'social_checkbox_li' ];
    $instance[ 'social_url_tw' ] = strip_tags( $new_instance[ 'social_url_tw' ] );
    $instance[ 'social_checkbox_tw' ] = $new_instance[ 'social_checkbox_tw' ];
    $instance[ 'social_url_tg' ] = strip_tags( $new_instance[ 'social_url_tg' ] );
    $instance[ 'social_checkbox_tg' ] = $new_instance[ 'social_checkbox_tg' ];
    return $instance;
}

function form( $instance ) {
    $defaults = array( 'social_checkbox_bh' => 'off',
        'social_checkbox_inst' => 'off',
        'social_checkbox_fb' => 'off',
        'social_checkbox_li' => 'off',
        'social_checkbox_tw' => 'off',
        'social_checkbox_tg' => 'off',);
    $instance = wp_parse_args( ( array ) $instance, $defaults ); ?>

    <!-- Behance -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_bh' ); ?>">Ссылка на Behance</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_bh' ); ?>" name="<?php echo $this->get_field_name( 'social_url_bh' ); ?>" type="text" value="<?php echo $instance[ 'social_url_bh' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_bh' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_bh' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_bh' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_bh' ); ?>">Показывать в списке?</label>
    </p>
    <!-- Behance END -->

    <!-- Instagram -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_inst' ); ?>">Ссылка на Instagram</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_inst' ); ?>" name="<?php echo $this->get_field_name( 'social_url_inst' ); ?>" type="text" value="<?php echo $instance[ 'social_url_inst' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_inst' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_inst' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_inst' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_inst' ); ?>">Показывать в списке?</label>
    </p>
    <!-- Instagram END -->

    <!-- Facebook -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_fb' ); ?>">Ссылка на Facebook</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_fb' ); ?>" name="<?php echo $this->get_field_name( 'social_url_fb' ); ?>" type="text" value="<?php echo $instance[ 'social_url_fb' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_fb' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_fb' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_fb' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_fb' ); ?>">Показывать в списке?</label>
    </p>
    <!-- Facebook END -->

    <!-- LinkedIn -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_li' ); ?>">Ссылка на LinkedIn</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_li' ); ?>" name="<?php echo $this->get_field_name( 'social_url_li' ); ?>" type="text" value="<?php echo $instance[ 'social_url_li' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_li' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_li' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_li' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_li' ); ?>">Показывать в списке?</label>
    </p>
    <!-- LinkedIn END -->

    <!-- Twitter -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_tw' ); ?>">Ссылка на Twitter</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_tw' ); ?>" name="<?php echo $this->get_field_name( 'social_url_tw' ); ?>" type="text" value="<?php echo $instance[ 'social_url_tw' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_tw' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_tw' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_tw' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_tw' ); ?>">Показывать в списке?</label>
    </p>
    <!-- Twitter END -->

    <!-- Telegram -->
    <p>
        <label for="<?php echo $this->get_field_id( 'social_url_tg' ); ?>">Ссылка на Telegram</label>
        <input class="widefat"  id="<?php echo $this->get_field_id( 'social_url_tg' ); ?>" name="<?php echo $this->get_field_name( 'social_url_tg' ); ?>" type="text" value="<?php echo $instance[ 'social_url_tg' ]; ?>" />
    </p>
    <!-- The checkbox -->
    <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_checkbox_tg' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_checkbox_tg' ); ?>" name="<?php echo $this->get_field_name( 'social_checkbox_tg' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'social_checkbox_tg' ); ?>">Показывать в списке?</label>
    </p>
    <!-- Telegram END -->
<?php
}
}
register_widget( 'socials_list_widget' );