<?php
add_action( 'wp_enqueue_scripts', 'haer_blago_assets' );
add_action( 'after_setup_theme', 'add_features' );
add_action( 'after_setup_theme', 'add_menu' );
function haer_blago_assets () {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . './assets/css/reset/normalize.css');
	wp_enqueue_style( 'reset', get_template_directory_uri() . './assets/css//reset/reset.css');
	wp_enqueue_style('index', get_template_directory_uri() . './assets/css/index.css');

    if (is_page_template('templates/about-us.php')) {
    wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css');
    }
    elseif (is_page_template('templates/news.php')) {
        wp_enqueue_style('news', get_template_directory_uri() . '/assets/css/news.css');
        wp_enqueue_script('news-js', get_template_directory_uri() . '/assets/js/news.js', null, null, true );
    }

    elseif (is_page_template('templates/about-nko.php')) {
        wp_enqueue_style('about-nko', get_template_directory_uri() . '/assets/css/about-nko.css');
    }
}

//панель управления
// show_admin_bar(false);

// elseif (is_page('nco-account')) {
//     wp_enqueue_style('nco-account', get_template_directory_uri() . './assets/css/nco-account.css');
//     wp_enqueue_script('nco-account-js', get_template_directory_uri() . './assets/js/nco-account.js', array(), '20151215', true );
// }
// elseif (is_page('personal-account')) {
//     wp_enqueue_style('personal-account', get_template_directory_uri() . './assets/css/personal-account.css');
//     wp_enqueue_script('personal-account-js', get_template_directory_uri() . './assets/js/personal-account.js', array(), '20151215', true );
// }

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function add_features () {
add_theme_support( 'custom-logo', [
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false,
] );
}

function add_menu () {
    register_nav_menu('top', 'Главное меню');
    register_nav_menu( 'bottom', 'Меню, документы и контакты');
}

//классы--------------------------------------------------------------------------------------------
//классы в меню в хэдере
add_filter( 'nav_menu_css_class','filter_nav_menu_css_classes', 10, 4);
function filter_nav_menu_css_classes( $classes, $item, $args, $depth) {
    if ( $args->theme_location === 'top' ) {
        $classes = [
            'header__li'
        ];

    }
    return $classes;
}

add_filter( 'nav_menu_link_attributes','filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth) {
    if ( $args->theme_location === 'top' ) {
        $atts ['class'] ='header__link';
    }
    return $atts;
}

//классы основного меню в футере
add_filter( 'nav_menu_link_attributes','filter_nav_footer_link_attributes', 10, 4 );
function filter_nav_footer_link_attributes( $atts, $item, $args, $depth) {
    if ( $args->theme_location === 'bottom' ) {
        $atts['class'] ='link';
    }
    return $atts;
}

//классы в лого
function custom_logo_class( $html ) {
    $html = str_replace( 'custom-logo', 'custom-logo header__logo', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'custom_logo_class' );



?>