<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NUTGIR - Nutrición</title>

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/main.css" rel="stylesheet">
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/imagesloaded.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/imagefill.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/resize-images.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/velocity.js"></script>

    <?php wp_head();?>
  </head>

  <body>
    <div class="padder"></div>
<div id="menu-button-container">
  <div id="menu-button">
    <div></div>
    <div></div>
  </div>
</div>
  <div class="navbar">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo">
      <img src="<?php bloginfo('template_url'); ?>/images/logo.svg">
    </a>
    <div class="menu">
      <a href="https://www.facebook.com/nutgirnutricion/?fref=ts" target=" _blank">Facebook</a>
      <a href="https://www.instagram.com/nutgir_nutricion/">Instagram</a>
      <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Retos' )  ) ); ?>">Retos</a>
      <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Recetas' )  ) ); ?>">Recetas</a>
      <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Tips' )  ) ); ?>">Tips</a>
      <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Programas' )  ) ); ?>">Programas</a>
    </div>
  </div>
  <div class="container">
    <div class="content">
<!--       <div class="blog-header">
        <a href="<?php bloginfo('wpurl');?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div> -->