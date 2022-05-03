<?php
/**
 * Theme Functions
 * 
 * @package sanpage
 */
?>
<?php

// Enqueue scripts and style
function sanpage_enqueue_scripts(){
  wp_enqueue_style( 'stylesheet', get_stylesheet_uri());
  wp_enqueue_script( 'javascript', get_template_directory_uri() . 'js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'sanpage_enqueue_scripts' );


?>