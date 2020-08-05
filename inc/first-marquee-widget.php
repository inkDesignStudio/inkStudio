<?php
class First_Marquee_Widget extends WP_Widget {

    public function __construct()
    {
        $args = array(
            'name' => 'inkDesign - First Marquee',
            'description' => 'первая бегущая строка'
        );
        parent::__construct('first_marquee_widget', '', $args);
    }

    public function form($instance){?>

        <p>
            <label for="<?php echo $this->get_field_id('marquee-id');?>">
                TEXT
            </label>
            <input
                name="<?php echo $this->get_field_name('marquee-text') ?>"
                id="<?php echo $this->get_field_id('marquee-id');?>"
                value="<?php echo $instance['marquee-text']; ?>"
                class="widefat"
            >
        </p>
        <?php

    }
    public function widget($args, $instance){
        echo $instance['marquee-text'];
    }
}
?>

