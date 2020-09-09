<!DOCTYPE html>
<html>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <!--displays the encoding-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="<?php bloginfo('description'); ?>">
   <!--displays the Tagline in Settings->General -->
   <title>
       <?php bloginfo('name'); ?>
   </title>
   
   <!-- Custom styles for this template -->
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
   <!--displays the primary CSS-->
   <?php wp_head(); ?>
   <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
            
            <link href="https://fonts.googleapis.com/css2?family=Jura&family=Source+Code+Pro&display=swap" rel="stylesheet">
   <style>
       span:hover{
        text-decoration:none;
        color: #F7ABAC;
        font-weight: bolder;
    }
*{
    font-family: 'Jura', sans-serif !important;
}
nav{
    font-weight: bolder;
   
    
}
.nav-link{
    margin-right: 1em;
    margin-left: 1em;
}


</style>

</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top  navbar-light bg-light" role="navigation">
 <div class="container">
   <!-- Brand and toggle get grouped for better mobile display -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
  
       <?php
       wp_nav_menu( array(
           'theme_location'    => 'primary',// refers to the key in functions
           'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
           'container'         => 'div', //container around menu
           'container_class'   => 'collapse navbar-collapse',//bs-class
           'container_id'      => 'bs-example-navbar-collapse-1',
           'menu_class'        => 'nav navbar-nav ',
           'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
           'walker'            => new WP_Bootstrap_Navwalker(),
       ) );
       ?>
   </div>

</button>


</nav>
