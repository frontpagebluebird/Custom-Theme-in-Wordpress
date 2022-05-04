<?php
/**
 * Header Template
 * 
 * @package sanpage
 */
?>
 <!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>"><!-- Dynamic Language -->
 <head>
   <meta charset="<?php bloginfo('charset') ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SANPAGE</title>

   <!-- Dynamic links of wp-include directory --> 
   <?php wp_head(); ?>                       <!-- e,g., <link rel="stylesheet" href="style.css"> -->

 </head>
 <body <?php body_class(); ?>> <!-- It adds bunch of classes for every page and it class comes from wp-include folder and you can add your own custom class e.g., body_class("san-class"); and this class can be use for every page -->

<!-- Google Analytic -->
<?php //wp_body_open(); ?>          <!-- It enables inserting Asynchronous Javascript  -->
<!-- or you can use conditional way for backward compatibility for e.g., " wp_body_open() is available in 5.2 version and if someone use less than 5.2 version number then it also work by giving the condition."-->
<?php
  if(function_exists('wp_body_open')){
    wp_body_open();
  }
?>

<div id="page" class="site">

<header id="masthead" class="site-header" role="banner">
  <?php get_template_part("template_part/header/navbar"); ?>        <!-- it is same as require_once() function e.g., require_once("template_part/header/navbar.php") -->
</header>

 <div id="content" class="site-content">

 