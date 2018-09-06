<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'menu-main' =>   ( 'Menu Main' ),
            'menu-servises1' =>   ( 'Menu Servises 1' ),
            'menu-servises2' =>   ( 'Menu Servises 2' ),
            'menu-servises3' =>   ( 'Menu Servises 3' ),
            'menu-vertical' =>   ( 'Menu Vertical' ),
            'footer-menu' =>   ( 'Footer Menu' ),
            'footer-menu2' =>   ( 'Footer Menu 2' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
function arphabet_widgets_init() {
    register_sidebar(
        array(
            'name' => 'Instagram',
            'id' => 'sidebar1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
    register_sidebar(
        array(
            'name' => 'Instagram2',
            'id' => 'sidebar2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
    register_sidebar(
        array(
            'name' => 'Главная заголовок',
            'id' => 'sidebar3',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
    register_sidebar(
        array(
            'name' => 'Главная текст',
            'id' => 'sidebar4',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

    register_sidebar(
        array(
            'name' => 'Номер',
            'id' => 'sidebar5',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );//Добавление изображения к записям
add_action( 'after_setup_theme', function() {
    add_theme_support( 'pageviews' );
});
add_filter('the_content', 'do_shortcode');//Добавление шорткода в контент
add_filter('widget_text', 'do_shortcode');//Добавление шорткода в виджеты
//define( 'WPCF7_UPLOADS_TMP_DIR', '/your/file/path' );
//Новые размер миниатюр
add_image_size( 'blog-thumb', 460, 260, array( 'center', 'top' ) );
add_image_size( 'blog-article', 945, 480, array( 'center', 'top' ) );
add_image_size( 'sale-thumb', 945, 480, array( 'center', 'top' ) );
add_image_size( 'servises-thumb', 350, 350, array( 'center', 'top' ) );


function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;
    // $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '<img src="http://localhost:8888/primaderma.com/wp-content/themes/primaderma/build/images/prev.png" alt="" class="pagination__prev"><img src="http://localhost:8888/primaderma.com/wp-content/themes/primaderma/build/images/prev_h.png" alt="" class="pagination__prev_h">'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '<img src="http://localhost:8888/primaderma.com/wp-content/themes/primaderma/build/images/next.png" alt="" class="pagination__next"><img src="http://localhost:8888/primaderma.com/wp-content/themes/primaderma/build/images/next_h.png" alt="" class="pagination__next_h">'; //текст ссылки "Следующая страница"
    if ($max > 1) echo '<div class="pagi_wrp">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">' . $current . '' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}
// function bvzk_create_post_type() {
//     $labels = array(
//         'name' => __( 'Услуги' ),
//         'singular_name' => __( 'Услуги' ),
//         'add_new' => __( 'Новый Услуга' ),
//         'add_new_item' => __( 'Добавить новый Услугу' ),
//         'edit_item' => __( 'Редактировать Услугу' ),
//         'new_item' => __( 'Новый Услуга' ),
//         'view_item' => __( 'Просмотреть Услугу' ),
//         'search_items' => __( 'Поиск Услуг' ),
//         'not_found' =>  __( 'Услуга не найден' ),
//         'not_found_in_trash' => __( 'Услуга не найдена в корзине' ),
//     );
//     $args = array(
//         'labels' => $labels,
//         'has_archive' => true,
//         'public' => true,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'custom-fields',
//             'thumbnail'
//         ),
// //        'taxonomies' => array( 'post_tag'),
//     );
//     register_post_type( 'servises', $args );
// }
// add_action( 'init', 'bvzk_create_post_type' );
// function bvzk_taxonomy() {
//     register_taxonomy( 'servises_category', 'servises' ,
//         array(
//             'labels' => array(
//                 'name'              => 'Категории Услуги',
//                 'singular_name'     => 'Категории Услуги',
//                 'search_items'      => 'Поиск Услуг Категорий',
//                 'all_items'         => 'Все Услуги Категории',
//                 'edit_item'         => 'Редактировать Услугу Категории',
//                 'update_item'       => 'Обновить Категорию Услуг',
//                 'add_new_item'      => 'Добавить новую Категорию Услуги',
//                 'new_item_name'     => 'Новая Категория Услуги',
//                 'menu_name'         => 'Категория Услуги',
//             ),
//             'hierarchical' => true,
//             'sort' => true,
//             'args' => array( 'orderby' => 'term_order' ),
//             'rewrite' => array( 'slug' => 'servis' ),
//             'show_admin_column' => true,
//             'show_tagcloud' => true,
//         )
//     );
// }
// add_action( 'init', 'bvzk_taxonomy' );
// //___________________