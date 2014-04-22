<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wordpress-core.css" type="text/css" media="screen" />
    <?php wp_head(); ?>
  </head>
  <body class="fullscreenbg">
    <div class="wrap">
      <header>
      <div id="logo"><a href="http://localhost/teso/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bienvenue sur WP-TESO" rel="Bienvenue sur WP-TESO"></a>
      <div id="search"><?php get_search_form(); ?></div></div>
        <nav>
        <?php wp_nav_menu( array('menu' => 'Menu 1' )); ?>
        </nav>      
      </header>
      <div id="container">