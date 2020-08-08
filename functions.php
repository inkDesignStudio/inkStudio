<?php
/*
 * inkStudio functions and definitions
 */
include_once (__DIR__.'/inc/first-marquee-widget.php');
include_once (__DIR__.'/inc/second-marquee-widget.php');

add_action('init', 'spReg');

add_action('wp_ajax_order_data', 'newOrder');
add_action('wp_ajax_nopriv_order_data', 'newOrder');

add_filter('show_admin_bar', '__return_false');

function getImage( $name ) {
    echo get_template_directory_uri() . '/img/dest/' . $name;
}

function newOrder() {
    $name = wp_strip_all_tags($_POST['client-name']);
    $email = wp_strip_all_tags($_POST['client-email']);
    $phone = wp_strip_all_tags($_POST['client-phone']);
    $comment = wp_strip_all_tags($_POST['client-comment']);
    $service = wp_strip_all_tags($_POST['client-service']);
    $id = wp_insert_post( wp_slash([
        'post_title' => 'Заявка на: ' .$service,
        'post_type' => 'orders',
        'post_status' => 'publish',
        'meta_input' => [
            'wpcf-client-name' => $name,
            'wpcf-client-email' => $email,
            'wpcf-client-phone' => $phone,
            'wpcf-client-comment' => $comment,
            'wpcf-client-service' => $service,
        ]
    ]));
    wp_die();
}

function spReg() {
    register_post_type('works', array(
        'labels'              => array(
            'name'          => 'Наши работы',
            'singular_name' => 'Работа',
            'menu_name'     => 'Архив работ',
            'all_items'     => 'Все работы',
            'add_new'       => 'Добавить работу',
            'add_new_item'  => 'Добавить новую работу',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать работу',
            'new_item'      => 'Новая работа',
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'has_archive'         => 'works',
        'supports'            => array( 'title', 'thumbnail' ),
        'taxonomies'          => array( 'works-category' ),
        'menu_icon'           => 'http://www.inkdesign.studio/wp-content/uploads/2020/08/small_icon.png',
    ) );
    register_taxonomy('works-category', array('works'), array(
        'label'                 => 'Раздел работ', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы работ',
            'singular_name'     => 'Раздел работ',
            'search_items'      => 'Искать Раздел работ',
            'all_items'         => 'Все Разделы работ',
            'parent_item'       => 'Родит. раздел работ',
            'parent_item_colon' => 'Родит. раздел работ:',
            'edit_item'         => 'Ред. Раздел работ',
            'update_item'       => 'Обновить Раздел работ',
            'add_new_item'      => 'Добавить Раздел работ',
            'new_item_name'     => 'Новый Раздел работ',
            'menu_name'         => 'Раздел работ',
        ),
        'description'           => 'Рубрики для раздела работ', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => false, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ) );
    register_post_type('services', array(
        'labels'              => array(
            'name'          => 'Наши услуги',
            'singular_name' => 'Услуги',
            'menu_name'     => 'Архив услуг',
            'all_items'     => 'Все услуги',
            'add_new'       => 'Добавить услуги',
            'add_new_item'  => 'Добавить новые услуги',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать услуги',
            'new_item'      => 'Новые услуги',
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'has_archive'         => 'services',
        'supports'            => array('title'),
        'taxonomies'          => array( 'services-category' ),
        'menu_icon'           => 'http://www.inkdesign.studio/wp-content/uploads/2020/08/small_icon.png',
    ) );
    register_taxonomy('services-category', array('services'), array(
        'label'                 => 'Раздел услуг', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы услуг',
            'singular_name'     => 'Раздел услуги',
            'search_items'      => 'Искать Раздел услуги',
            'all_items'         => 'Все Разделы услуг',
            'parent_item'       => 'Родит. раздел услуг',
            'parent_item_colon' => 'Родит. раздел услуг:',
            'edit_item'         => 'Ред. Раздел услуг',
            'update_item'       => 'Обновить Раздел услуг',
            'add_new_item'      => 'Добавить Раздел услуг',
            'new_item_name'     => 'Новый Раздел услуг',
            'menu_name'         => 'Раздел услуг',
        ),
        'description'           => 'Рубрики для раздела услуг', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => false, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ) );

    register_post_type('orders', array(
        'labels'              => array(
            'name'          => 'Заказы',
            'singular_name' => 'Заказ',
            'menu_name'     => 'Архив заказов',
            'all_items'     => 'Все заказы',
            'add_new'       => 'Добавить заказ',
            'add_new_item'  => 'Добавить новый заказ',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать заказ',
            'new_item'      => 'Новый заказ',
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'has_archive'         => 'orders',
        'supports'            => array('title'),
        'menu_icon'           => 'http://www.inkdesign.studio/wp-content/uploads/2020/08/small_icon.png',
    ) );
}

function getCurrentCatID()
{
   global $wp_query;
   if (is_category() || is_single()) {
      $cat_ID = get_query_var('cat');
   }
   return $cat_ID;
}

if ( ! function_exists( 'sp_setup' ) ) :

   function sp_setup() {

      load_theme_textdomain( 'inkStudio-theme', get_template_directory() . '/languages' );

      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
//      add_theme_support( 'custom-logo' );

      register_nav_menus( array(
         'menu-1' => esc_html__( 'Primary', 'inkStudio-theme' ),
      ) );
      register_nav_menu('menu-overlay', 'Main navigation menu');

      add_theme_support( 'html5', array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
      ) );


      add_theme_support( 'custom-background', apply_filters( 'sp_custom_background_args', array(
         'default-color' => 'ffffff',
         'default-image' => '',
      )));

      add_theme_support( 'customize-selective-refresh-widgets' );

      add_theme_support( 'custom-logo', array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      ) );
   }
endif;

add_action( 'after_setup_theme', 'sp_setup' );


function sp_content_width() {
   $GLOBALS['content_width'] = apply_filters( 'sp_content_width', 640 );
}
add_action( 'after_setup_theme', 'sp_content_width', 0 );

//Register widget area.
function sp_widgets_init() {
    register_sidebar([
        'name'          => 'ТЕКСТ ПЕРВОЙ БЕГУЩЕЙ СТРОКИ',
        'id'            => 'first-marquee',
        'description'   => 'НЕ добавляйте новые виджеты. Активны только виджеты inkDesign',
        'before_widget' => null,
        'after_widget'  => null,
    ]);
    register_widget('first_marquee_widget');
    register_sidebar([
        'name'          => 'ТЕКСТ ВТОРОЙ БЕГУЩЕЙ СТРОКИ',
        'id'            => 'second-marquee',
        'description'   => 'НЕ добавляйте новые виджеты. Активны только виджеты inkDesign\'',
        'before_widget' => null,
        'after_widget'  => null,
    ]);
    register_widget('second_marquee_widget');
//   register_sidebar( array(
//      'name'          => esc_html__( 'Sidebar', 'inkStudio-theme' ),
//      'id'            => 'sidebar-1',
//      'description'   => esc_html__( 'Add widgets here.', 'inkStudio-theme' ),
//      'before_widget' => '<section id="%1$s" class="widget %2$s">',
//      'after_widget'  => '</section>',
//      'before_title'  => '<h2 class="widget-title">',
//      'after_title'   => '</h2>',
//   ));
}
add_action( 'widgets_init', 'sp_widgets_init' );

//Enqueue scripts and styles.
function sp_scripts() {
    wp_enqueue_style(
        'style.min.css',
        get_template_directory_uri().'/style.min.css',
        [],
        '1.1.5',
        'all'
    );
//   wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
//   wp_enqueue_style('cms-style', get_stylesheet_uri() );
//   wp_enqueue_style('mediascreen', get_template_directory_uri().'/css/mediascreen.css');
//   wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.css');
//   wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
//   wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/fontawesome-all.css');
//
//    wp_enqueue_script(
//        'main.js',
//        get_template_directory_uri().'/assets/main.js',
//        [],
//        '1.0.0',
//        true
//    );
    wp_enqueue_script(
        'main.js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.4',
        true
    );
    wp_enqueue_script(
        'services--contact-form.js',
        get_template_directory_uri() . '/components/services--contact-form/js/services--contact-form.js',
        [],
        '1.0.0',
        true
    );
    wp_enqueue_script('jquery');
//   wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper.js');
//   wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.js');
//   wp_enqueue_script('lazyload', get_template_directory_uri().'/js/lazyload.js');
//   wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');
//
//   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//      wp_enqueue_script( 'comment-reply' );
//   }
}
add_action( 'wp_enqueue_scripts', 'sp_scripts' );
function get_component($file, $params = null, $return = false)
{
   $class     = !empty($params['class']) ? ' ' . $params['class'] : '';
   $attr_list = !empty($params['attr']) ? $params['attr'] : [];
   $entityData = !empty($params['entity_data']) ? $params['entity_data'] : [];
   $storageData = !empty($params['storage_data']) ? $params['storage_data'] : [];
   $entityList = !empty($params['entity_list']) ? $params['entity_list'] : [];
   $storageList = !empty($params['storage_list']) ? $params['storage_list'] : [];

   $attributes = implode(' ', array_map(function ($key, $value) {
      return "$key=\"$value\"";
   }, array_keys($attr_list), $attr_list));

   if ($return) {
      ob_start();
      include('components' . '/' . $file . '/' . $file . '.php');
      $contents = ob_get_contents();
      ob_end_clean();

      return $contents;
   } else { 
      include('components' . '/' . $file . '/' . $file . '.php');
   }
}
