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
    <header
      class="header"
      :class="{ header_mobile : isShowSearch }">
      <div
        class="header__logo">
        <a href="<?php echo home_url(); ?>" >
          <img class="header__logo-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo.svg">
        </a>
      </div>

      <?php get_search_form(); ?>
      
      <button @click="showMenu" class="header__btn-mobile"><i class="fas fa-bars"></i></button>
      
      
      <nav
        v-if="!isShowSearch"
        :class="{ header__menu_mobile : isShowMenu }" class="header__menu"
        @click.self="showMenu">
          <?php
          wp_nav_menu( array(
            'menu'            => 'header', 
            'container'       => false, 
            'menu_class'      => 'header__menu-list',
            'items_wrap'      => '<ul class="header__menu-list">%3$s</ul>'
          ) ); 
          ?>
      </nav>
    </header>