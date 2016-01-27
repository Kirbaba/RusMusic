<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/wp_bootstrap_navwalker.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1');
    wp_enqueue_style( 'font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'mcustomscrollbar', '//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');    
    wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1');

}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');    
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js', array(), '1');
    wp_enqueue_script( 'mCustomScrollbar', '//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js', array(), '1');
    wp_enqueue_script( 'google-maps-custom', get_template_directory_uri() . '/js/google-maps-custom.js', array(), '1');
    wp_enqueue_script( '45deg', get_template_directory_uri() . '/js/45deg.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');
    wp_enqueue_script( 'cabinet', get_template_directory_uri() . '/js/cabinet.js', array(), '1');

    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
    wp_localize_script( 'jquery', 'path', $translation_array );
    wp_localize_script( 'my-script', 'img',
    array(
        'url' => get_template_directory_uri().'/img/',
        'act' => admin_url('admin-ajax.php')
    ));
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

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi($recent) {
    global $wp_query;
    /* $i = 0;
     foreach($wp_query->posts as $post){
         $cat = get_the_category( $post->ID );
         if($cat[0]->name == 'Блог'){
             $i++;
         }
     }*/
    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => '?page=%_%',
        'format' => '%#%',
        'total' => $recent->max_num_pages,
        'show_all' => TRUE,
        'current' => (isset($_GET['page'])) ? $_GET['page'] : 1,
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => true,
        'prev_text' => '<img src="'.TM_URL.'/img/LEFT-ARROW.png" alt="">',
        'next_text' => '<img src="'.TM_URL.'/img/RIGHT-ARROW.png" alt="">',
        'type' => 'array',
        'add_fragment' => '',
        'add_args' => False,
        'before_page_number' => '',
        'after_page_number' => ''
    );
    $result = paginate_links($args);

    if( is_array( $result ) ) {
        // $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $result as $page ) {
            echo '<li>'.$page.'</li>';
        }
        echo '</ul>';
    }
    // удаляем добавку к пагинации для первой страницы
    //$result = str_replace( '/page/1/', '', $result );

}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');

if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

/*-------------------------- МЕНЮ НАВИГАЦИИ ---------------------------------------*/

function theme_register_nav_menu() {
    register_nav_menus( array(
        'primary' => 'Главное',
        'sitemap' => 'Карта сайта',
        'becomeastar' => 'Страница "Стань звездой"',
        'footer_menu_1' => 'Меню в подвале 1',
        'footer_menu_2' => 'Меню в подвале 2',
        'footer_menu_3' => 'Меню в подвале 3',
        'footer_menu_4' => 'Меню в подвале 4',
    ) );
    //register_nav_menu( 'primary', 'Главное меню' );
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


    /*Меню настройки контактов*/
    $customizer->add_section(
        'social_section',
        array(
            'title' => 'Социальные сети',
            'description' => 'Соц. сети',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'fb_textbox',
        array('default' => 'fb.com')
    );
    $customizer->add_setting(
        'tw_textbox',
        array('default' => 'twitter.com')
    );
    $customizer->add_setting(
        'inst_textbox',
        array('default' => 'instagram.com')
    );
    $customizer->add_setting(
        'vk_textbox',
        array('default' => 'vk.com')
    );
    $customizer->add_setting(
        'ok_textbox',
        array('default' => 'ok.ru')
    );
    $customizer->add_setting(
        'yt_textbox',
        array('default' => 'youtube.com')
    );

    $customizer->add_control(
        'fb_textbox',
        array(
            'label' => 'Facebook',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'tw_textbox',
        array(
            'label' => 'Twitter',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'inst_textbox',
        array(
            'label' => 'Instagram',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'vk_textbox',
        array(
            'label' => 'VK',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'yt_textbox',
        array(
            'label' => 'Youtube',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'ok_textbox',
        array(
            'label' => 'Odnoklassniki',
            'section' => 'social_section',
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

/*------------------------------------NEWS------------------------------------------*/

//хук в init action и вызов create_book_taxonomies когда хук сработает
add_action( 'init', 'create_news_hierarchical_taxonomy', 0 );
//задаем название для произвольной таксономии Topics для ваших записей

function create_news_hierarchical_taxonomy() {

// Добавляем новую таксономию, делаем ее иерархической вроде рубрик
// также задаем перевод для интерфейса

    $labels = array(
        'name' => _x( 'Категории новостей', 'taxonomy general name' ),
        'singular_name' => _x( 'Категория новостей', 'taxonomy singular name' ),
        'search_items' =>  __( 'Найти категорию новостей' ),
        'all_items' => __( 'Все категории новостей' ),
        'parent_item' => __( 'Родительская категория новостей' ),
        'parent_item_colon' => __( 'Родительская категория новостей:' ),
        'edit_item' => __( 'Родительская категория новостей' ),
        'update_item' => __( 'Обновить категорию новостей' ),
        'add_new_item' => __( 'Добавить новую категорию новостей' ),
        'new_item_name' => __( 'Название новой категории новостей' ),
        'menu_name' => __( 'Категории новостей' ),
    );

// Теперь регистрируем таксономию

    register_taxonomy('custnews',array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'custnews' ),
    ));

}

function getNewsShortcode(){
    wp_reset_query();
    $args = array(
        'numberposts'     => -1, // тоже самое что posts_per_page
        'post_type'       => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'custnews',
                'field' => 'slug',
                'terms' => 'mainnews'
            )
        )
     );

    $my_query = new WP_Query($args);
    //prn($my_query);
    $parser = new Parser();
    $parser->render(TM_DIR . '/view/main_news.php', ['my_query' => $my_query]);
}

add_shortcode('mainNews', 'getNewsShortcode');
/*-----------------------------------END NEWS--------------------------------------*/

/*CUSTOM SINGLES*/
function get_custom_single_template($single_template) {
    global $post;

    $terms = get_the_terms($post->ID, 'custnews');
    if($terms && !is_wp_error( $terms )) {
        //Make a foreach because $terms is an array but it supposed to be only one term
        foreach($terms as $term){
            $single_template = TM_DIR . '/single-'.$term->slug.'.php';
        }
    }

    return $single_template;
}
add_filter( "single_template", "get_custom_single_template" ) ;
/*MINIMIZED CONTENT*/
function content($num) {
    $theContent = get_the_content();
    $output = preg_replace('/<img[^>]+./','', $theContent);
    $output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
    $output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
    $limit = $num+1;
    $content = explode(' ', $output, $limit);
    array_pop($content);
    $content = implode(" ",$content)."...";
    echo $content;
}

/*---------------------------------- OUR TEAM -------------------------------------*/

add_action('init', 'myCustomInitTeam');
function myCustomInitTeam()
{
    $labels = array(
        'name' => 'Наша команда', // Основное название типа записи
        'singular_name' => 'Команда', // отдельное название записи типа Book
        'add_new' => 'Добавить участника',
        'add_new_item' => 'Добавить нового участника',
        'edit_item' => 'Редактировать участника',
        'new_item' => 'Новый участник',
        'view_item' => 'Посмотреть участника',
        'search_items' => 'Найти участника',
        'not_found' => 'Участников не найдено',
        'not_found_in_trash' => 'В корзине участников не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Команда'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('team', $args);
}

function extraFieldsSocialTwitter($post)
{
    ?>
    <p>
        <span>Twitter: </span>
        <input type="text" name='extra[tw]' value="<?php echo get_post_meta($post->ID, "tw", 1); ?>">
    </p>
    <?php
}

function extraFieldsSocialFacebook($post)
{
    ?>
    <p>
        <span>Facebook: </span>
        <input type="text" name='extra[fb]' value="<?php echo get_post_meta($post->ID, "fb", 1); ?>">
    </p>
    <?php
}

function extraFieldsSocialGplus($post)
{
    ?>
    <p>
        <span>Google+ : </span>
        <input type="text" name='extra[gp]' value="<?php echo get_post_meta($post->ID, "gp", 1); ?>">
    </p>
    <?php
}

function extraFieldsSocialLinkedin($post)
{
    ?>
    <p>
        <span>LinkedIn: </span>
        <input type="text" name='extra[in]' value="<?php echo get_post_meta($post->ID, "in", 1); ?>">
    </p>
    <?php
}

function extraFieldsSocialPinterest($post)
{
    ?>
    <p>
        <span>Pinterest: </span>
        <input type="text" name='extra[pi]' value="<?php echo get_post_meta($post->ID, "pi", 1); ?>">
    </p>
    <?php
}

function extraFieldsPosition($post)
{
    ?>
    <p>
        <span>Укажите должность участника: </span>
        <input type="text" name='extra[position]' value="<?php echo get_post_meta($post->ID, "position", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsTeam()
{
    add_meta_box('extra_position', 'Должность', 'extraFieldsPosition', 'team', 'normal', 'high');
    add_meta_box('extra_tw', 'Twitter', 'extraFieldsSocialTwitter', 'team', 'normal', 'high');
    add_meta_box('extra_fb', 'Facebook', 'extraFieldsSocialFacebook', 'team', 'normal', 'high');
    add_meta_box('extra_gp', 'Google+', 'extraFieldsSocialGplus', 'team', 'normal', 'high');
    add_meta_box('extra_in', 'LinkedIn', 'extraFieldsSocialLinkedin', 'team', 'normal', 'high');
    add_meta_box('extra_pi', 'Pinterest', 'extraFieldsSocialPinterest', 'team', 'normal', 'high');

}

add_action('add_meta_boxes', 'myExtraFieldsTeam', 1);

//вывод
function getTeamShortcode(){
    $args = array(
        'post_type' => 'team',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/team.php', ['my_query' => $my_query]);

}

add_shortcode('team', 'getTeamShortcode');

/*-------------------------------- END OUR TEAM ----------------------------------*/

/*---------------------------------- PARTNERS ------------------------------------*/

add_action('init', 'myCustomInitPartners');
function myCustomInitPartners()
{
    $labels = array(
        'name' => 'Партнеры', // Основное название типа записи
        'singular_name' => 'Партнеры', // отдельное название записи типа Book
        'add_new' => 'Добавить партнера',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать партнера',
        'new_item' => 'Новый партнер',
        'view_item' => 'Посмотреть партнера',
        'search_items' => 'Найти партнера',
        'not_found' => 'Партнеров не найдено',
        'not_found_in_trash' => 'В корзине партнеров не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Партнеры'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('partners', $args);
}

function extraFieldsPartnerLink($post)
{
    ?>
    <p>
        <span>Укажите ссылку: </span>
        <input type="text" name='extra[link]' value="<?php echo get_post_meta($post->ID, "link", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsPartners()
{
    add_meta_box('extra_link', 'Ссылка', 'extraFieldsPartnerLink', 'partners', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsPartners', 1);


//вывод на главной
function getPartnersShortcode(){
    $args = array(
        'post_type' => 'partners',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/partners.php', ['my_query' => $my_query]);

}

function getPartnersPageShortcode(){
    $args = array(
        'post_type' => 'partners',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/partners_page.php', ['my_query' => $my_query]);

}

add_shortcode('partners', 'getPartnersShortcode');
add_shortcode('partnersPage', 'getPartnersPageShortcode');

/*-------------------------------- END PARTNERS ----------------------------------*/

/*---------------------------------- ARTISTS -------------------------------------*/

add_action('init', 'myCustomInitArtists');
function myCustomInitArtists()
{
    $labels = array(
        'name' => 'Наши артисты', // Основное название типа записи
        'singular_name' => 'Артисты', // отдельное название записи типа Book
        'add_new' => 'Добавить артиста',
        'add_new_item' => 'Добавить нового артиста',
        'edit_item' => 'Редактировать артиста',
        'new_item' => 'Новый артист',
        'view_item' => 'Посмотреть артиста',
        'search_items' => 'Найти артиста',
        'not_found' => 'Артистов не найдено',
        'not_found_in_trash' => 'В корзине артистов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Артисты'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('artists', $args);
}

function extraFieldsArtistsSocialTwitter($post)
{
    ?>
    <p>
        <span>Twitter: </span>
        <input type="text" name='extra[tw]' value="<?php echo get_post_meta($post->ID, "tw", 1); ?>">
    </p>
    <?php
}

function extraFieldsArtistsSocialFacebook($post)
{
    ?>
    <p>
        <span>Facebook: </span>
        <input type="text" name='extra[fb]' value="<?php echo get_post_meta($post->ID, "fb", 1); ?>">
    </p>
    <?php
}

function extraFieldsArtistsSocialGplus($post)
{
    ?>
    <p>
        <span>Google+ : </span>
        <input type="text" name='extra[gp]' value="<?php echo get_post_meta($post->ID, "gp", 1); ?>">
    </p>
    <?php
}

function extraFieldsArtistsSocialLinkedin($post)
{
    ?>
    <p>
        <span>LinkedIn: </span>
        <input type="text" name='extra[in]' value="<?php echo get_post_meta($post->ID, "in", 1); ?>">
    </p>
    <?php
}

function extraFieldsArtistsSocialPinterest($post)
{
    ?>
    <p>
        <span>Pinterest: </span>
        <input type="text" name='extra[pi]' value="<?php echo get_post_meta($post->ID, "pi", 1); ?>">
    </p>
    <?php
}

function extraFieldsArtistsPosition($post)
{
    ?>
    <p>
        <span>Укажите должность участника: </span>
        <input type="text" name='extra[position]' value="<?php echo get_post_meta($post->ID, "position", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsArtists()
{
    add_meta_box('extra_position', 'Должность', 'extraFieldsArtistsPosition', 'artists', 'normal', 'high');
    add_meta_box('extra_tw', 'Twitter', 'extraFieldsArtistsSocialTwitter', 'artists', 'normal', 'high');
    add_meta_box('extra_fb', 'Facebook', 'extraFieldsArtistsSocialFacebook', 'artists', 'normal', 'high');
    add_meta_box('extra_gp', 'Google+', 'extraFieldsArtistsSocialGplus', 'artists', 'normal', 'high');
    add_meta_box('extra_in', 'LinkedIn', 'extraFieldsArtistsSocialLinkedin', 'artists', 'normal', 'high');
    add_meta_box('extra_pi', 'Pinterest', 'extraFieldsArtistsSocialPinterest', 'artists', 'normal', 'high');

}

add_action('add_meta_boxes', 'myExtraFieldsArtists', 1);

//вывод на главной
function getArtistsShortcode(){
    $args = array(
        'post_type' => 'artists',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/artists.php', ['my_query' => $my_query]);

}

function getArtistsSliderShortcode(){
    $args = array(
        'post_type' => 'artists',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/artists_slider.php', ['my_query' => $my_query]);

}

add_shortcode('artistsSlider', 'getArtistsSliderShortcode');
add_shortcode('artists', 'getArtistsShortcode');

/*--------------------------------- END ARTISTS ----------------------------------*/

/*------------------------------------ CONTACTS ----------------------------------*/

// AJAX ACTION
add_action('wp_ajax_sendFeedback', 'sendFeedback');
add_action('wp_ajax_nopriv_sendFeedback', 'sendFeedback');


function sendFeedback(){
    $adminMail = get_option('admin_email');
    $mail =  $_POST['mail'];
    $name = $_POST['name'];
    $site = $_POST['site'];
    $message = $_POST['message'];

    if(!empty($mail) && !empty($message)){
        $str = "С вашего сайта оставили заявку на обратную связь:<br>";
        $str .= 'Имя: '.$name.' <br>';
        $str .= 'Email: '.$mail.' <br>';
        $str .= 'Сайт: '.$site.' <br>';
        $str .= 'Текст сообщения : '.$message.' <br>';

        mail($adminMail, "Письмо с сайта", $str, "Content-type: text/html; charset=UTF-8\r\n");

        echo 1;
    }else{
        echo 0;
    }

    die();
}

/*-------------------------------- END CONTACTS ----------------------------------*/

/*----------------------------- CONCERT ORGANIZING -------------------------------*/

// AJAX ACTION
add_action('wp_ajax_currentService', 'getCurrentService');
add_action('wp_ajax_nopriv_currentService', 'getCurrentService');

add_action('init', 'myCustomInitOrganizing');
function myCustomInitOrganizing()
{
    $labels = array(
        'name' => 'Организация концертов', // Основное название типа записи
        'singular_name' => 'Услуги', // отдельное название записи типа Book
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу',
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'view_item' => 'Посмотреть услугу',
        'search_items' => 'Найти услугу',
        'not_found' => 'Услуг не найдено',
        'not_found_in_trash' => 'В корзине услуг не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Услуги'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('organizing', $args);
}

//вывод на главной
function getOrganizingShortcode(){
    $firstArgs = array(
        'post_type' => 'organizing',
        'post_status' => 'publish',
        'posts_per_page' => 1);


    $args = array(
        'post_type' => 'organizing',
        'post_status' => 'publish',
        'posts_per_page' => 4);

    $my_query = null;
    $my_query = new WP_Query($args);

    $first_query = null;
    $first_query = new WP_Query($firstArgs);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/organizing.php', ['my_query' => $my_query, 'first_query' => $first_query]);

}

add_shortcode('organizing', 'getOrganizingShortcode');

function getCurrentService(){
    $id = $_POST['id'];

    $currentPost = get_post($id);

    echo json_encode($currentPost);
    die();
}

/*------------------------- END CONCERT ORGANIZING -------------------------------*/

/*-------------------------- REGISTRATION/LOGIN ----------------------------------*/
// AJAX ACTION
add_action('wp_ajax_createUser', 'createUser');
add_action('wp_ajax_nopriv_createUser', 'createUser');

function createUser(){
    $username = $_POST['username'];
    $userlastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    //создаем пользователя
    wp_create_user( $username, $password, $email );
    //добавляем ему поле "пол"
    $user_id = username_exists( $username );
    add_user_meta( $user_id, 'gender', $gender );
    update_user_meta( $user_id, 'first_name', $username );
    update_user_meta( $user_id, 'last_name', $userlastname );
    //prn(get_user_meta($user_id));
    die();
}

add_action('init', function(){

    // not the login request?
    if(!isset($_POST['action']) || $_POST['action'] !== 'my_login_action')
        return;

    $creds = array();
    $creds['user_login'] = $_POST['log'];
    $creds['user_password'] = $_POST['pwd'];
    $creds['remember'] = true;

    $user = wp_signon( $creds, false );

    if ( is_wp_error($user) )
        echo $user->get_error_message();


    // redirect back to the requested page if login was successful
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
});

if( isset( $_GET['logout'] ) )
    wp_logout();

/*------------------------- END REGISTRATION/LOGIN -------------------------------*/

/*-------------------------------- INSTAGRAM -------------------------------------*/

function instagram(){
    $data = [];

    //user id and taccess token
    $token = '1933975520.17e5b12.a06c8f70f585489c96ba30223906519c';
    $user_id = '1822923780';

    $url_media = "https://api.instagram.com/v1/users/".$user_id."/media/recent/?access_token=".$token;
    $context = stream_context_create(array(
        'http' => array(
            'ignore_errors'=>true,
            'method'=>'GET'
            // for more options check http://www.php.net/manual/en/context.http.php
        )
    ));
    $media_request = json_decode(file_get_contents($url_media, false, $context));

    $data['profile_photo'] = $media_request->data[0]->user->profile_picture;
    foreach($media_request->data as $item){
        $data['media'][] = array('thumb' => $item->images->thumbnail->url,'pic'=> $item->images->standard_resolution->url);
    }
    $data['media_count'] = count($media_request->data);

    $url_follows = "https://api.instagram.com/v1/users/".$user_id."?access_token=".$token;
    $follows_request = json_decode(file_get_contents($url_follows, false, $context));

    $data['username'] = $follows_request->data->username;
    $data['folowers'] = $follows_request->data->counts->follows;
    $data['folowed_by'] = $follows_request->data->counts->followed_by;

   // prn($data);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/instagram.php', ['data' => $data]);
}

add_shortcode('instagram', 'instagram');

/*------------------------------- END INSTAGRAM ----------------------------------*/

/*----------------------------------- ALBUMS -------------------------------------*/

add_action('init', 'myCustomInitAlbums');
function myCustomInitAlbums()
{
    $labels = array(
        'name' => 'Альбомы', // Основное название типа записи
        'singular_name' => 'Альбомы', // отдельное название записи типа Book
        'add_new' => 'Добавить альбом',
        'add_new_item' => 'Добавить новый альбом',
        'edit_item' => 'Редактировать альбом',
        'new_item' => 'Новый альбом',
        'view_item' => 'Посмотреть альбом',
        'search_items' => 'Найти альбом',
        'not_found' => 'Альбомов не найдено',
        'not_found_in_trash' => 'В корзине альбомов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Альбомы'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('albums', $args);
}

function extraFieldsAlbumsYear($post)
{
    ?>
    <p>
        <span>Год выпуска: </span>
        <input type="text" name='extra[year]' value="<?php echo get_post_meta($post->ID, "year", 1); ?>">
    </p>
    <?php
}

function extraFieldsAlbumsLabel($post)
{
    ?>
    <p>
        <span>Лэйбл: </span>
        <input type="text" name='extra[label]' value="<?php echo get_post_meta($post->ID, "label", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsAlbums()
{
    add_meta_box('extra_year', 'Год', 'extraFieldsAlbumsYear', 'albums', 'normal', 'high');
    add_meta_box('extra_label', 'Лэйбл', 'extraFieldsAlbumsLabel', 'albums', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsAlbums', 1);

//вывод плитками
function getAlbumsShortcode(){
    $args = array(
        'post_type' => 'albums',
        'post_status' => 'publish',
        'posts_per_page' => 8);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/albums.php', ['my_query' => $my_query]);

}

add_shortcode('albums', 'getAlbumsShortcode');

/*---------------------------------- END ALBUMS ----------------------------------*/

/*------------------------------- BECOME A STAR ----------------------------------*/

// AJAX ACTION
add_action('wp_ajax_becomeastar', 'sendBecomeAStar');
add_action('wp_ajax_nopriv_becomeastar', 'sendBecomeAStar');


function sendBecomeAStar(){
    $adminMail = get_option('admin_email');
    $mail =  $_POST['mail'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $site = $_POST['site'];
    $link = $_POST['link'];


    if(!empty($mail) && !empty($message)){
        $str = "С вашего сайта прислали анкету:<br>";
        $str .= 'Имя: '.$name.' <br>';
        $str .= 'Email: '.$mail.' <br>';
        $str .= 'Город: '.$city.' <br>';
        $str .= 'Facebook: '.$facebook.' <br>';
        $str .= 'Instagram: '.$instagram.' <br>';
        $str .= 'Сайт: '.$site.' <br>';
        $str .= 'Где можно услышать песни : '.$link.' <br>';

        mail($adminMail, "Анкета 'Стань звездой'", $str, "Content-type: text/html; charset=UTF-8\r\n");

        echo 1;
    }else{
        echo 0;
    }

    die();
}

/*--------------------------- END BECOME A STAR ----------------------------------*/

/*------------------------------------- DEMO -------------------------------------*/

// AJAX ACTION
add_action('wp_ajax_demosend', 'sendDemo');
add_action('wp_ajax_nopriv_demosend', 'sendDemo');

function sendDemo(){

    if($_POST)
    {
        $to_email       = get_option('admin_email');; //Recipient email, Replace with own email here
        $from_email     = "noreply@wp.loc"; //From email address (eg: no-reply@YOUR-DOMAIN.com)

        //check if its an ajax request, exit if not
        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            $output = json_encode(array( //create JSON data
                'type'=>'error',
                'text' => 'Sorry Request must be Ajax POST'
            ));
            die($output); //exit script outputting json data
        }

        //Sanitize input data using PHP filter_var().
        $user_name      = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
        $user_email     = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
        $city   = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
        $link        = filter_var($_POST["link"], FILTER_SANITIZE_STRING);

        //email body
        $message_body = "Имя : ".$user_name."\nПочта : ".$user_email."\nГород : ".$city."\nСсылка на песню : ".$link ;

        ### Attachment Preparation ###
        $file_attached = false;
        if(isset($_FILES['file_attach'])) //check uploaded file
        {
            //get file details we need
            $file_tmp_name    = $_FILES['file_attach']['tmp_name'];
            $file_name        = $_FILES['file_attach']['name'];
            $file_size        = $_FILES['file_attach']['size'];
            $file_type        = $_FILES['file_attach']['type'];
            $file_error       = $_FILES['file_attach']['error'];

            //exit script and output error if we encounter any
            if($file_error>0)
            {
                $mymsg = array(
                    1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
                    2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                    3=>"The uploaded file was only partially uploaded",
                    4=>"No file was uploaded",
                    6=>"Missing a temporary folder" );

                $output = json_encode(array('type'=>'error', 'text' => $mymsg[$file_error]));
                die($output);
            }

            //read from the uploaded file & base64_encode content for the mail
            $handle = fopen($file_tmp_name, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $encoded_content = chunk_split(base64_encode($content));
            //now we know we have the file for attachment, set $file_attached to true
            $file_attached = true;

        }

        if($file_attached) //continue if we have the file
        {
            $boundary = md5("sanwebe");
            //header
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From:".$from_email."\r\n";
            $headers .= "Reply-To: ".$user_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

            //plain text
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= chunk_split(base64_encode($message_body));

            //attachment
            $body .= "--$boundary\r\n";
            $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $body .= $encoded_content;
        }else{
            //proceed with PHP email.
            $headers = "From:".$from_email."\r\n".
                'Reply-To: '.$user_email.'' . "\n" .
                'X-Mailer: PHP/' . phpversion();
            $body = $message_body;
        }

        $send_mail = mail($to_email, "Демо запись (rusmusic.pro)", $body, $headers);

        if(!$send_mail)
        {
            //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
            $output = json_encode(array('type'=>'error', 'text' => 'Произошла ошибка!'));
            die($output);
        }else{
            $output = json_encode(array('type'=>'message', 'text' => 'Спасибо за ваше письмо!'));
            die($output);
        }
    }
}

/*---------------------------------- END DEMO ------------------------------------*/

/*---------------------------------- TRAINING ------------------------------------*/

add_action('init', 'myCustomInitTraining');
function myCustomInitTraining()
{
    $labels = array(
        'name' => 'Курсы обучения', // Основное название типа записи
        'singular_name' => 'Курс', // отдельное название записи типа Book
        'add_new' => 'Добавить курс',
        'add_new_item' => 'Добавить новый курс',
        'edit_item' => 'Редактировать курс',
        'new_item' => 'Новый курс',
        'view_item' => 'Посмотреть курс',
        'search_items' => 'Найти курс',
        'not_found' => 'Курсов не найдено',
        'not_found_in_trash' => 'В корзине курсов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Курсы'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('course', $args);
}

/*Блок с тектовым редактором для второй половины поста*/
function extraFieldsTrainingDescription($post)
{
    ?>
    <div class="meta_box_content"><textarea name="extra[description]" cols="40" rows="20"><?php echo get_post_meta($post->ID, "description", 1); ?></textarea></div>
    <?php
}

function admin_add_wysiwyg_custom_field_textarea()
{ ?>
    <script type="text/javascript">/* <![CDATA[ */
        jQuery(function($){
            var i=1;
            $('.meta_box_content textarea').each(function(e)
            {
                var id = $(this).attr('id');
                if (!id)
                {
                    id = 'customEditor-' + i++;
                    $(this).attr('id',id);
                }
                tinyMCE.execCommand("mceAddEditor", false, id);
                tinyMCE.execCommand('mceAddControl', false, id);
            });
        });
        /* ]]> */</script>
<?php }
add_action( 'admin_print_footer_scripts', 'admin_add_wysiwyg_custom_field_textarea', 99 );

function extraFieldsTrainingPrice($post)
{
    ?>
    <p>
        <span>Цена курса (только цифры): </span>
        <input type="text" name='extra[price]' value="<?php echo get_post_meta($post->ID, "price", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsTraining()
{
    add_meta_box('extra_description', 'Описание', 'extraFieldsTrainingDescription', 'course', 'normal', 'high');
    add_meta_box('extra_price', 'Стоимость', 'extraFieldsTrainingPrice', 'course', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsTraining', 1);

//select list
function getCoursesList(){
    $args = array(
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/course_select.php', ['my_query' => $my_query]);
}

add_shortcode('courselist', 'getCoursesList');

//вывод на главной
function getTrainingShortcode(){
    $args = array(
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/course_grid.php', ['my_query' => $my_query]);

}

add_shortcode('coursegrid', 'getTrainingShortcode');

// AJAX ACTION
add_action('wp_ajax_addcourse', 'selectCourse');
add_action('wp_ajax_nopriv_addcourse', 'selectCourse');

function selectCourse($id){
    if(isset($_POST['id'])){
        $id['id'] = $_POST['id'];
    }

    if(isset($id['id']) && $id['id'] != ''){
        $chosen = get_post($id['id']);
        $parser = new Parser();
        $parser->render(TM_DIR . '/view/course_choose.php', ['chosen' => $chosen]);
        if(isset($_POST['id'])){
            wp_die();
        }
    }
}

add_shortcode('selectCourse', 'selectCourse');

// AJAX ACTION
add_action('wp_ajax_sendcourses', 'sendCourses');
add_action('wp_ajax_nopriv_sendcourses', 'sendCourses');

function sendCourses(){

    $adminMail = get_option('admin_email');
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $courses = $_POST['courses'];
    $total = $_POST['total'];


    if(!empty($mail) && !empty($courses)){
        $str = "С вашего сайта прислали заявку:<br>";
        $str .= 'Имя: '.$name.' <br>';
        $str .= 'Email: '.$mail.' <br>';
        $str .= 'Телефон: '.$phone.' <br>';
        $str .= 'Выбранные курсы: '.$courses.' <br>';
        $str .= 'Общая стоимость : '.$total.' р.<br>';

        mail($adminMail, "Запись на обучение (rusmusic.pro)", $str, "Content-type: text/html; charset=UTF-8\r\n");
    }

    die();
}

/*-------------------------------- END TRAINING -----------------------------------*/

/*------------------------------- FIND YOUR HIT -----------------------------------*/

function admin_menu()
{
    add_menu_page('Музыка', 'Найди свой хит', 'manage_options', 'music', 'musicAdmin');
}

add_action('admin_menu', 'admin_menu');

//получение всех данных по названию таблицы
function getDataFromDb($tableName)
{
    global $wpdb;
    $data = $wpdb->get_results("SELECT * FROM `$tableName`", ARRAY_A);
    return $data;
}

//admin page for bankets
function musicAdmin(){
    global $wpdb;
    $music = getDataFromDb('music');
    //prn($music);
    if($_POST){
        // Проверяем загружен ли файл
        if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
        {
            $uploadDir = TM_DIR."/music/";
            $name = $_POST['name'];
            $author = $_POST['author'];
            $date = time();
            // Если файл загружен успешно, перемещаем его
            // из временной директории в конечную
            move_uploaded_file($_FILES["filename"]["tmp_name"], $uploadDir.$_FILES["filename"]["name"]);

            $wpdb->insert('music',array(
                'name' => $name,
                'author' => $author,
                'dt_add' => $date,
                'path' => "/music/".$_FILES["filename"]["name"]
            ));
        } else {
            echo("Ошибка загрузки файла");
        }
    }

    $parser = new Parser();
    $parser->render(TM_DIR . "/view/admin/music.php", array('music' => $music), true);
}

//вывод на главной
function findTheHit(){
    $music = getDataFromDb('music');

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/findhits.php', ['music' => $music]);
}

add_shortcode('findthehit', 'findTheHit');
/*--------------------------- END FIND YOUR HIT -----------------------------------*/

/*------------------------------- EARN MONEY --------------------------------------*/

add_action('init', 'myCustomInitEarnMoney');
function myCustomInitEarnMoney()
{
    $labels = array(
        'name' => 'Заработай на музыке', // Основное название типа записи
        'singular_name' => 'Услуги', // отдельное название записи типа Book
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу',
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'view_item' => 'Посмотреть услугу',
        'search_items' => 'Найти услугу',
        'not_found' => 'Услуг не найдено',
        'not_found_in_trash' => 'В корзине услуг не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Услуги "Заработай на музые"'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('earnmoney', $args);
}

//вывод на главной
function getEarnMoneyShortcode(){
    $firstArgs = array(
        'post_type' => 'earnmoney',
        'post_status' => 'publish',
        'posts_per_page' => 1);

    $args = array(
        'post_type' => 'earnmoney',
        'post_status' => 'publish',
        'posts_per_page' => 4);

    $my_query = null;
    $my_query = new WP_Query($args);

    $first_query = null;
    $first_query = new WP_Query($firstArgs);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/earnmoney.php', ['my_query' => $my_query, 'first_query' => $first_query]);

}

add_shortcode('earnmoney', 'getEarnMoneyShortcode');

/*----------------------------- END EARN MONEY ------------------------------------*/

/*---------------------------------- AUTHORS -------------------------------------*/

add_action('init', 'myCustomInitAuthors');
function myCustomInitAuthors()
{
    $labels = array(
        'name' => 'Наши авторы', // Основное название типа записи
        'singular_name' => 'Авторы', // отдельное название записи типа Book
        'add_new' => 'Добавить автора',
        'add_new_item' => 'Добавить нового автора',
        'edit_item' => 'Редактировать автора',
        'new_item' => 'Новый автор',
        'view_item' => 'Посмотреть автора',
        'search_items' => 'Найти автора',
        'not_found' => 'Авторов не найдено',
        'not_found_in_trash' => 'В корзине авторов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Авторы'

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
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('authors', $args);
}

function extraFieldsAuthorsSocialTwitter($post)
{
    ?>
    <p>
        <span>Twitter: </span>
        <input type="text" name='extra[tw]' value="<?php echo get_post_meta($post->ID, "tw", 1); ?>">
    </p>
    <?php
}

function extraFieldsAuthorsSocialFacebook($post)
{
    ?>
    <p>
        <span>Facebook: </span>
        <input type="text" name='extra[fb]' value="<?php echo get_post_meta($post->ID, "fb", 1); ?>">
    </p>
    <?php
}

function extraFieldsAuthorsSocialGplus($post)
{
    ?>
    <p>
        <span>Google+ : </span>
        <input type="text" name='extra[gp]' value="<?php echo get_post_meta($post->ID, "gp", 1); ?>">
    </p>
    <?php
}

function extraFieldsAuthorsSocialLinkedin($post)
{
    ?>
    <p>
        <span>LinkedIn: </span>
        <input type="text" name='extra[in]' value="<?php echo get_post_meta($post->ID, "in", 1); ?>">
    </p>
    <?php
}

function extraFieldsAuthorsSocialPinterest($post)
{
    ?>
    <p>
        <span>Pinterest: </span>
        <input type="text" name='extra[pi]' value="<?php echo get_post_meta($post->ID, "pi", 1); ?>">
    </p>
    <?php
}

function extraFieldsAuthorsPosition($post)
{
    ?>
    <p>
        <span>Укажите должность автора: </span>
        <input type="text" name='extra[position]' value="<?php echo get_post_meta($post->ID, "position", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsAuthors()
{
    add_meta_box('extra_position', 'Должность', 'extraFieldsAuthorsPosition', 'authors', 'normal', 'high');
    add_meta_box('extra_tw', 'Twitter', 'extraFieldsAuthorsSocialTwitter', 'authors', 'normal', 'high');
    add_meta_box('extra_fb', 'Facebook', 'extraFieldsAuthorsSocialFacebook', 'authors', 'normal', 'high');
    add_meta_box('extra_gp', 'Google+', 'extraFieldsAuthorsSocialGplus', 'authors', 'normal', 'high');
    add_meta_box('extra_in', 'LinkedIn', 'extraFieldsAuthorsSocialLinkedin', 'authors', 'normal', 'high');
    add_meta_box('extra_pi', 'Pinterest', 'extraFieldsAuthorsSocialPinterest', 'authors', 'normal', 'high');

}

add_action('add_meta_boxes', 'myExtraFieldsAuthors', 1);

//вывод на главной
function getAuthorsShortcode(){
    $args = array(
        'post_type' => 'authors',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/authors.php', ['my_query' => $my_query]);

}

function getAuthorsSliderShortcode(){
    $args = array(
        'post_type' => 'authors',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/authors_slider.php', ['my_query' => $my_query]);

}

add_shortcode('authorsSlider', 'getAuthorsSliderShortcode');
add_shortcode('authors', 'getAuthorsShortcode');

/*--------------------------------- END AUTHORS ----------------------------------*/

/*--------------------------------- VISITED PAGES ------------------------------------*/

function addVisitedPage(){
    global $wpdb;

    $page_id     = get_queried_object_id();
    $event_type = 'visited';
    $user_id = get_current_user_id();

    $last_visited = $wpdb->get_results("SELECT * FROM `visited` WHERE `user_id` = '{$user_id}' ORDER BY `id` DESC LIMIT 1", ARRAY_A);

    if(is_front_page()){
        $visit_post_id = 0;
        $visit_post_title =  "Главная";
        $visit_post_link = get_site_url();

            if($page_id == 0 && (($last_visited[0]['post_id'] != $visit_post_id && $last_visited[0]['user_id'] == $user_id) || empty($last_visited ))){
                if(isset($visit_post_title)){
                    if($wpdb->insert('visited',
                        array('post_id' => $visit_post_id,
                            'post_title' => $visit_post_title,
                            'link' => $visit_post_link,
                            'user_id' => $user_id)
                    )){
                        //id вставленной записи
                        $event_id = $wpdb->insert_id;
                        $time = time();
                        addFeed($event_id,$event_type,$user_id,$time);
                    }
                }
            }


    }
    else {
        $visit_post_id = get_the_ID();
        $visit_post_title = get_the_title($visit_post_id);
        $visit_post_link = get_the_permalink($visit_post_id);

            if($page_id != 0 && (($last_visited[0]['post_id'] != $visit_post_id && $last_visited[0]['user_id'] == $user_id) || empty($last_visited ))){
                if(isset($visit_post_title)){
                    if($wpdb->insert('visited',
                        array('post_id' => $visit_post_id,
                            'post_title' => $visit_post_title,
                            'link' => $visit_post_link,
                            'user_id' => $user_id)
                    )){
                        //id вставленной записи
                        $event_id = $wpdb->insert_id;
                        $time = time();
                        addFeed($event_id,$event_type,$user_id,$time);
                    }
                }
            }
    }

}

function addFeed($event_id,$event_type,$user_id,$time){
        global $wpdb;

        $wpdb->insert('feed',
            array(  'event_id' => $event_id,
                'event_type' => $event_type,
                'user_id' => $user_id,
                'dt' => $time),
            array('%d','%s','%d','%d'));
    }

/*------------------------------- END VISITED PAGES ----------------------------------*/