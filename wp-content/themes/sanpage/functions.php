<?php
/**
 * Theme Functions
 * 
 * @package sanpage
 */
?>
<?php

// directory path and filemtime
// echo "<pre>";
// print_r("Path : ". get_template_directory());   //output ->  C:\wamp\www\sanpage/wp-content/themes/sanpage
// echo "<br/>";
// print_r("Filemtime : ". filemtime( get_template_directory() . "/style.css" ));   //output ->  1651599880
// wp_die();   


// Enqueue scripts and style
function sanpage_enqueue_scripts(){
  // wp_enqueue_style('main-css', get_template_directory_uri() . "/main.css", ['stylesheet'] );
  wp_enqueue_style( "stylesheet", get_stylesheet_uri(), [], filemtime( get_template_directory() . "/style.css" ) , "all" );  // get_stylesheet_url() using this function we can get path of style.css ===-===-=== filemtime() this function updates version (time) of file e.g., style.css, it update time (version) when you do some change in your style.css ,  so we don't have go to history to clear our chache again and again. ===-===-=== the last string "all" this is I use to get all types of media stylesheet like (orientation:protrait) or @media screen and (max-width:640px) ,etc. and the are three string we can add "all", "print" and "screen" ,so I choose "all" to gel all style way..  
  wp_enqueue_script( "javascript", get_template_directory_uri() . "js/script.js" );  // get_template_directory_uri() using this function you can get path e.g., C:\wamp\www\sanpage/wp-content/themes/sanpage
}
add_action( 'wp_enqueue_scripts', 'sanpage_enqueue_scripts' ); // wp_enqueue_scripts this is a hook name === and ===  sanpage_enqueue_scripts is your function name and you can write some other function instead of that my function name. 


?>