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


// ___________ Enqueue scripts and style (How to add custom script and style) ____________ //
function sanpage_enqueue_scripts(){
  // Enqueue it straight way
//wp_enqueue_style( "style-css", get_stylesheet_uri(), [], filemtime( get_template_directory() . "/style.css" ) , "all" );                                                   // wp_enqueue_style() -> this function set path of your custom directory/file of style.css ===-===-=== "style-css" is a handle  ===-===-=== get_stylesheet_url() using this function we can get path of style.css ===-===-=== [] in this list we can add dependency e.g., ["stylesheet"] ===-===-=== filemtime() this function updates version (time) of file e.g., style.css, it update time (version) when you do some change in your style.css ,  so we don't have go to history to clear our chache again and again. ===-===-=== the last string "all" this is I use to get all types of media stylesheet like (orientation:protrait) or @media screen and (max-width:640px) ,etc. and the are three string we can add "all", "print" and "screen" ,so I choose "all" to gel all style way..  
//wp_enqueue_script( "main-js", get_template_directory_uri() . "/assets/main.js", [] , filemtime(get_template_directory() . "/assets/main.js"), true );                     //  wp_enqueue_style() -> this function set path of your custom directory/file of script.js ===-===-=== get_template_directory_uri() using this function you can get path e.g., C:\wamp\www\sanpage/wp-content/themes/sanpage ===-===-=== true -> it enables to add scripts on footer and it can be true or false
  // or

  // Enqueue with register, and it is a best practice to use the WP register style/script
  
  // register style
  wp_register_style( "style-css", get_stylesheet_uri(), [], filemtime( get_template_directory() . "/style.css" ) , "all" );
  wp_register_style( "mdbbootstrap-css", get_template_directory_uri() . "/assets/src/library/css/mdb.min.css", [], filemtime( get_template_directory() . "/style.css" ) , "all" );
  // register script
  wp_register_script( "main-js", get_template_directory_uri() . "/assets/main.js", [] , filemtime(get_template_directory() . "/assets/main.js"), true );
  wp_register_script( "mdbbootstrap-js", get_template_directory_uri() . "/assets/src/library/js/mdb.min.js", ["jquery"] , filemtime(get_template_directory() . "/assets/main.js"), true );
  
  // enqueue style
  wp_enqueue_style("style-css");
  wp_enqueue_style("mdbbootstrap-css");
  // enqueue script
  wp_enqueue_script("main-js");
  wp_enqueue_script("mdbbootstrap-js");
}
add_action( 'wp_enqueue_scripts', 'sanpage_enqueue_scripts' ); // wp_enqueue_scripts this is a hook name === and ===  sanpage_enqueue_scripts is your function name and you can write some other function instead of that my function name. 
// ___________ //Enqueue scripts and style ____________ //


?>