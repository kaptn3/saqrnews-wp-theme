<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/favicon.png">

  <?php wp_head(); ?>
</head>
<?php get_template_part('templates/google'); ?>

<body <?php body_class(); ?>>
  <div class="app">
    <header class="header"
        :class="{ header_mobile : isShowSearch }">
      <nav class="header__social">
        <a class="header__social-link" href="#facebook">
          <span class="fa-stack fa-sm">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a class="header__social-link" href="#instagram">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a class="header__social-link" href="#twitter">
          <span class="fa-stack fa-sm">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a class="header__social-link" href="#whatsapp">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>
      </nav>

      <div
        class="header__logo">
        <a href="<?php echo home_url(); ?>" >
          <img class="header__logo-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo.svg">
        </a>
      </div>

      <?php get_search_form(); ?>
      
      <button @click="showMenu" class="header__btn-mobile"><i class="fas fa-bars"></i></button>
      
      <nav :class="{ header__menu_mobile : isShowMenu }" class="header__menu">
          <?php
          wp_nav_menu( array(
            'menu'            => 'right', 
            'container'       => false, 
            'menu_class'      => 'footer__menu-list',
            'items_wrap'      => '<ul class="header__menu-list header__menu-list_right">%3$s</ul>'
          ) ); 
          ?>
          <?php
          /*wp_nav_menu( array(
            'menu'            => 'left', 
            'container'       => false, 
            'menu_class'      => 'footer__menu-list',
            'items_wrap'      => '<ul class="header__menu-list header__menu-list_left">%3$s</ul>'
          ) ); */
          ?>
      </nav>
    </header>