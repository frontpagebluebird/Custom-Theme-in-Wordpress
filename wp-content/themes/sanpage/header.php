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
   <!-- Dynamic links --> <?php wp_head(); ?> <!-- e,g., <link rel="stylesheet" href="style.css"> -->
 </head>
 <body <?php body_class(); ?>> <!-- It adds bunch of classes for every page and you can add your own custom class e.g., body_class("san-class"); and this class can be use for every page -->

<!-- Google Analytic -->
<?php wp_body_open(); ?>  <!-- It enables inserting Asynchronous Javascript  -->


   header