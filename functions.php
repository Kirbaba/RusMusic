<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/wp_bootstrap_navwalker.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1');
    wp_enqueue_style( 'font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');    
     wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1');
      wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1');
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');    
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
     wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');
}

function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );


/*-------------------------- МЕНЮ НАВИГАЦИИ ---------------------------------------*/

function theme_register_nav_menu() {
    register_nav_menu( 'primary', 'Главное меню' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

/*------------------------ КОНЕЦ МЕНЮ НАВИГАЦИИ ------------------------------------*/

/*--------------------------- НАСТРОЙКИ ТЕМЫ ---------------------------------------*/
/*3 телеофна*/
add_action('customize_register', function($customizer){
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Настройки контактов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'phone_textbox',
        array('default' => '+7 (985) 777-26-25')
    );
    $customizer->add_setting(
        'phone_textbox2',
        array('default' => '+7 (985) 777-26-25')
    );
    $customizer->add_setting(
        'phone_textbox3',
        array('default' => '+7 (985) 777-26-25')
    );


    $customizer->add_control(
        'phone_textbox',
        array(
            'label' => 'Телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'phone_textbox2',
        array(
            'label' => 'Телефон 2',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'phone_textbox3',
        array(
            'label' => 'Телефон 3',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
});

/*------------------------- КОНЕЦ НАСТРОЕК ТЕМЫ ------------------------------------*/

/*---------------------------- СЛАЙДЕР НА ГЛАВНОЙ ----------------------------------*/

add_action('init', 'myCustomInitMainSlider');
function myCustomInitMainSlider()
{
    $labels = array(
        'name' => 'Слайдер на главной', // Основное название типа записи
        'singular_name' => 'Слайдер', // отдельное название записи типа Book
        'add_new' => 'Добавить слайд',
        'add_new_item' => 'Добавить новыфй слайд',
        'edit_item' => 'Редактировать слайд',
        'new_item' => 'Новый слайд',
        'view_item' => 'Посмотреть слайд',
        'search_items' => 'Найти слайд',
        'not_found' => 'Слайдов не найдено',
        'not_found_in_trash' => 'В корзине слайдов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Слайдер на главной'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail')
    );
    register_post_type('mainslider', $args);
}

function extraFieldsDescription($post)
{
    ?>
    <p>
        <span>Краткое описание слайда: </span>
        <input type="text" name='extra[description]' value="<?php echo get_post_meta($post->ID, "description", 1); ?>">
    </p>
    <?php
}

function extraFieldsVideo($post)
{
    ?>
    <p>
        <span>Вставьте ссылку на видео(embed): </span>
        <input type="text" name='extra[video]' value="<?php echo get_post_meta($post->ID, "video", 1); ?>">
    </p>
    <?php
}

function extraFieldsLink($post)
{
    ?>
    <p>
        <span>Вставьте ссылку для перехода: </span>
        <input type="text" name='extra[link]' value="<?php echo get_post_meta($post->ID, "link", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsMainSlider()
{
    add_meta_box('extra_description', 'Описание', 'extraFieldsDescription', 'mainslider', 'normal', 'high');
    add_meta_box('extra_video', 'Видео', 'extraFieldsVideo', 'mainslider', 'normal', 'high');
    add_meta_box('extra_link', 'Ссылка', 'extraFieldsLink', 'mainslider', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsMainSlider', 1);

add_action('save_post', 'myExtraFieldsUpdate', 10, 1);

/* Сохраняем данные, при сохранении поста */
function myExtraFieldsUpdate($post_id)
{
    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

//вывод на главной
function getMainSliderShortcode(){
    $args = array(
        'post_type' => 'mainslider',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/main_slider.php', ['my_query' => $my_query]);

}

add_shortcode('mainSlider', 'getMainSliderShortcode');

/*----------------------- КОНЕЦ СЛАЙДЕРА НА ГЛАВНОЙ --------------------------------*/

/*-------------------------- СТРАНИЦЫ НА ГЛАВНОЙ -----------------------------------*/

add_action('init', 'myCustomInitMainDirection');
function myCustomInitMainDirection()
{
    $labels = array(
        'name' => 'Направления на главной', // Основное название типа записи
        'singular_name' => 'Направления', // отдельное название записи типа Book
        'add_new' => 'Добавить направление',
        'add_new_item' => 'Добавить новвое направление',
        'edit_item' => 'Редактировать направление',
        'new_item' => 'Новое направление',
        'view_item' => 'Посмотреть направление',
        'search_items' => 'Найти направление',
        'not_found' => 'Направлений не найдено',
        'not_found_in_trash' => 'В корзине направлений не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Направления на главной'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail')
    );
    register_post_type('maindirection', $args);
}

function extraFieldsDirectionDescription($post)
{
    ?>
    <p>
        <span>Краткое описание слайда: </span>
        <input type="text" name='extra[description]' value="<?php echo get_post_meta($post->ID, "description", 1); ?>">
    </p>
    <?php
}

function extraFieldsDirectionLink($post)
{
    ?>
    <p>
        <span>Вставьте ссылку для перехода: </span>
        <input type="text" name='extra[link]' value="<?php echo get_post_meta($post->ID, "link", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsMainDirection()
{
    add_meta_box('extra_description', 'Краткое описание', 'extraFieldsDirectionDescription', 'maindirection', 'normal', 'high');
    add_meta_box('extra_link', 'Ссылка', 'extraFieldsDirectionLink', 'maindirection', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsMainDirection', 1);

//вывод на главной
function getMainDirectionShortcode($paged){
    $args = array(
        'post_type' => 'maindirection',
        'post_status' => 'publish',
        'posts_per_page' => 2,
        'offset' => $paged['paged']);

    //prn($paged['paged']);

    $my_query = null;
    $my_query = new WP_Query($args);

    //prn($my_query);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/main_direction.php', ['my_query' => $my_query]);
}

add_shortcode('mainDirection', 'getMainDirectionShortcode');

/*------------------------ КОНЕЦ СТРАНИЦ НА ГЛАВНОЙ --------------------------------*/