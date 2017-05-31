<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700|Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <title>NAPSA - Virtual Workshop</title>
  
    <?php wp_head(); ?>
  </head>


<nav id="site-navigation" aria-label="Menu">

 <?php wp_nav_menu( array( 
        'menu_id' => 'vw_menu', 
        'theme_location' => 'primary-menu', 
        'items_wrap'     => '<label for="toggle-mobile-menu" aria-label="Menu">&#9776;</label><input id="toggle-mobile-menu" type="checkbox" /><ul id="%1$s" class="%2$s">%3$s</ul>',
) ); ?>
</nav>