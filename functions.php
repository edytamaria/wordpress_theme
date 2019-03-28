<?php


function load_scripts() {

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js',  array(), null, true );
    wp_enqueue_script('jquery');
 
    wp_enqueue_script('jquery-script-custom',  get_template_directory_uri() . '/js/jquery-theme.js', array(), null, true );
    
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/style.css', array(), null );
    
   
}
 add_action( 'wp_enqueue_scripts', 'load_scripts' );

 add_theme_support('menus');