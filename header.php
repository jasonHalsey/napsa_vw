<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <script src="https://use.typekit.net/rrm5chi.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <title>NAPSA - Virtual Workshop</title>

    <script type="text/javascript">
    var templateUrl = '<?= get_stylesheet_directory_uri(); ?>';
    </script>
  
    <?php wp_head(); ?>
  </head>

  <header>
    <section id="head_contain">
        <div class="logo_header"><a href="<?php echo home_url(); ?>"><img src='<?php echo get_stylesheet_directory_uri(); ?>/images/nspsa_header_logo.png' alt="NAPSA"/></a></div>
        <div class="banner_header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png" alt="NAPSA Virtual Workshop" /></div>
        <div class="mobile_banner">Virtual<span>Workshop</span></div>

    </section>
  </header>
<body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>