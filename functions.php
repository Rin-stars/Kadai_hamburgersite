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
    
    wp_enqueue_style( 'font-awesome', get_theme_file_uri ( '/css/font-awesome.css' ), array(), '4.7.0' ); if( $locale == 'ja' ) {
        wp_enqueue_style( 'Hamburger_site-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() ); 
    }
    
//deleted        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
//deleted        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
//deleted        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
//deleted        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
//deleted        wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' ); //added
        wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css', array(), '1.0.0' ); //added
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' , '', '3.6.0', true );
        wp_enqueue_script( 'script', get_theme_file_uri ( '/js/script.js' ), array( 'jquery' ), '1.0.0', true );
        
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_site_script' );
    
    ?>