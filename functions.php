<?php

function custom_theme_support() {
    add_theme_support( 'html5', array(
    'search-form', 
    'comment-form', 
    'comment-list', 
    'gallery', 
    'caption',
    ) );
    add_theme_support( 'menus' ); 
    add_theme_support( 'title-tag' ); 
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'custom_theme_support' );
 


function Hamburger_script() {

    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'Hamburger_site' );
    
    //  サイト共通のCSSの読み込み
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/app.css', array(), '1.0.0' ); 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    //  サイト共通のjsの読み込み
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' , '', '3.6.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' , array(), '1.0.0' );
    //  Googlefontsの読み込み
    wp_enqueue_style( 'robot', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
    wp_enqueue_style( 'mplus', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' );

}
add_action( 'wp_enqueue_scripts', 'Hamburger_script' );


    

// ナビゲーションメニュー出力関数wp_nav_menuの[li]にclass追加
function add_additional_class_on_li($classes, $item, $args){

    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }
    return $classes;
    
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// ナビゲーションメニュー出力関数wp_nav_menuの[a]にclass追加
function add_additional_class_on_a($classes, $item, $args) {

    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;

}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// 外観→メニュー画面にある、「メニューの位置」の登録
register_nav_menu('sidebar-menu', 'サイドバーメニュー');


// スラッグ名が日本語だったら自動的に投稿タイプ＋id付与へ変更（スラッグを設定した場合は適用しない）
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

?>