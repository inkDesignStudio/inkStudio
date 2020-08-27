<?php

class contacts_list_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'contacts_widget', // Base ID
            __( 'Контакты', 'wptheme' ), // Name
            array( 'description' => __( 'Здесь указываем контакты', 'wptheme' ), ) // Args
        );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $contacts_address = $instance[ 'contacts_address' ];
        $contacts_telephone = $instance[ 'contacts_telephone' ];
        $contacts_email = $instance[ 'contacts_email' ];
        // Retrieve the checkbox
        if( 'on' == $instance[ 'contacts_checkbox_address' ] ) : ?>

            <h3 class="footer__subtitle footer__subtitle_address"><?= $contacts_address ?></h3>

        <?php endif; ?>
        <?php

        if( 'on' == $instance[ 'contacts_checkbox_telephone' ] ) : ?>

            <h3 class="footer__subtitle footer__subtitle_telephone"><?= $contacts_telephone ?></h3>

        <?php endif; ?>

        <?php
        if( 'on' == $instance[ 'contacts_checkbox_email' ] ) : ?>

            <h3 class="footer__subtitle footer__subtitle_email"><?= $contacts_email ?></h3>

        <?php endif; ?>
        <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'contacts_address' ] = strip_tags( $new_instance[ 'contacts_address' ] );
        $instance[ 'contacts_checkbox_address' ] = $new_instance[ 'contacts_checkbox_address' ];
        $instance[ 'contacts_telephone' ] = strip_tags( $new_instance[ 'contacts_telephone' ] );
        $instance[ 'contacts_checkbox_telephone' ] = $new_instance[ 'contacts_checkbox_telephone' ];
        $instance[ 'contacts_email' ] = strip_tags( $new_instance[ 'contacts_email' ] );
        $instance[ 'contacts_checkbox_email' ] = $new_instance[ 'contacts_checkbox_email' ];
        return $instance;
    }

    function form( $instance ) {
        $defaults = array( 'contacts_checkbox_address' => 'off',
            'contacts_checkbox_telephone' => 'off',
            'contacts_checkbox_email' => 'off',);
        $instance = wp_parse_args( ( array ) $instance, $defaults ); ?>

        <!-- Адрес -->
        <p>
            <label for="<?php echo $this->get_field_id( 'contacts_address' ); ?>">Адрес</label>
            <input class="widefat"  id="<?php echo $this->get_field_id( 'contacts_address' ); ?>" name="<?php echo $this->get_field_name( 'contacts_address' ); ?>" type="text" value="<?php echo $instance[ 'contacts_address' ]; ?>" />
        </p>
        <!-- The checkbox -->
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'contacts_checkbox_address' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'contacts_checkbox_address' ); ?>" name="<?php echo $this->get_field_name( 'contacts_checkbox_address' ); ?>" />
            <label for="<?php echo $this->get_field_id( 'contacts_checkbox_address' ); ?>">Показывать в списке?</label>
        </p>
        <!-- Адрес END -->

        <!-- Номер телефона -->
        <p>
            <label for="<?php echo $this->get_field_id( 'contacts_telephone' ); ?>">Номер телефона</label>
            <input class="widefat"  id="<?php echo $this->get_field_id( 'contacts_telephone' ); ?>" name="<?php echo $this->get_field_name( 'contacts_telephone' ); ?>" type="text" value="<?php echo $instance[ 'contacts_telephone' ]; ?>" />
        </p>
        <!-- The checkbox -->
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'contacts_checkbox_telephone' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'contacts_checkbox_telephone' ); ?>" name="<?php echo $this->get_field_name( 'contacts_checkbox_telephone' ); ?>" />
            <label for="<?php echo $this->get_field_id( 'contacts_checkbox_telephone' ); ?>">Показывать в списке?</label>
        </p>
        <!-- Номер телефона END -->

        <!-- Email -->
        <p>
            <label for="<?php echo $this->get_field_id( 'contacts_email' ); ?>">Электронная почта</label>
            <input class="widefat"  id="<?php echo $this->get_field_id( 'contacts_email' ); ?>" name="<?php echo $this->get_field_name( 'contacts_email' ); ?>" type="text" value="<?php echo $instance[ 'contacts_email' ]; ?>" />
        </p>
        <!-- The checkbox -->
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'contacts_checkbox_email' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'contacts_checkbox_email' ); ?>" name="<?php echo $this->get_field_name( 'contacts_checkbox_email' ); ?>" />
            <label for="<?php echo $this->get_field_id( 'contacts_checkbox_email' ); ?>">Показывать в списке?</label>
        </p>
        <!-- Email END -->
        <?php
    }
}
register_widget( 'contacts_list_widget' );
