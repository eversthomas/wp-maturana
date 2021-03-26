<!DOCTYPE html>
<html lang="de"> <!-- Set this to the main language of your site -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title><?php bloginfo( 'name' ); ?></title>
    
    <!-- Enter a brief description of your page -->
    <meta name="author" content="<?php bloginfo( 'author' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="processwire, template, sass, weblog, thomas evers">
    
    <!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
    
    <?php wp_head(); ?>
  </head>
  
  <body>
    <div id="page" class="site">
      

    <a class="skip-link screen-reader-text" href="#content">skip to content</a>
    <header id="masthead" role="banner">
      <div class="wrapper">
        <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo( 'description' ); ?></p>
        
        <!-- the main navigation -->
        <?php get_template_part( 'inc/navigation' ); ?>
        <!-- /navigation -->
        
      </div>
    </header>
