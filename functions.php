<?php


function load_scripts() {

    // Load our main stylesheet.
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/style.css', array(), null );
    
   //wp_enqueue_script( 'jquery' );
    wp_enqueue_script('jquery', get_template_directory_uri() . 'js/jquery-3.3.1.min.js',  array(), null, true );
    wp_enqueue_script('jquery-script-custom',  get_template_directory_uri() . '/js/jquery-theme.js', array(), null, true );
    //wp_register_script( 'jquery-script',  get_template_directory_uri() . '/js/jquery-theme.js', array(''), null, true );
    //wp_enqueue_script('jquery-script');    
    //wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), null, true );

   
}
 add_action( 'wp_enqueue_scripts', 'load_scripts' );
 
/*function load_jquery() {

    wp_deregisterscript( 'jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . 'js/jquery-3.3.1.min.js',  array(), 1, true );

    
}
add_action( 'wp_enqueue_scripts', 'load_jquery');