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
   wp_localize_script( 'myscript', 'contact_form_vars', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ) );
}
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
   add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
function my_custom_scripts() {
  wp_enqueue_script( 'my-ajax-handle', get_template_directory_uri() . '/js/my-ajax-script.js', array( 'jquery' ), '1.0', true );
  wp_localize_script( 'my-ajax-handle', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_ajax_my_validation', 'my_validation_callback' );
add_action( 'wp_ajax_nopriv_my_validation', 'my_validation_callback' );
function my_validation_callback() {
  if ( isset( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'my-nonce' ) ) {
    $response = array();
    // perform your validation here
    $response['status'] = 'success'; // or 'error'
    $response['message'] = 'Your validation message';
    echo json_encode( $response );
  }
  wp_die();
}
?>