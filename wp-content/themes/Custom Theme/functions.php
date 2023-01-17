<?php
add_action('wp_enqueue_scripts', 'CustomScripts');

   error_reporting(E_ALL);

   ini_set("display_errors", 1);

function CustomScripts(){
   wp_enqueue_style('custom-style', get_stylesheet_uri());
   wp_deregister_script( 'jquery' );
   wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script('myscript', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');



?>