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
 


function Hamburger_site_script() {

    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'Hamburger_site' );
    

        //  サイト共通のCSSの読み込み
         wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
         wp_enqueue_style( 'style', get_template_directory_uri() . '/css/app.css', array(), '1.0.0' ); 
         wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        //  サイト共通のjsの読み込み
         wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' , '', '3.6.0', true );
         wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' , array(), '1.0.0' );
        
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_site_script' );
    
?>