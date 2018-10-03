<?php

if ( ! function_exists( 'saqrnews_setup' ) ) :

  function saqrnews_setup() {
    load_theme_textdomain( 'saqrnews', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
      'header' => 'Header menu',
      'footer' => 'Footer menu'

    ) );

    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );
  }
endif;

add_action( 'after_setup_theme', 'saqrnews_setup' );

function saqrnews_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'saqrnews' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'saqrnews' ),
    'before_widget' => '<section id="%1$s" class="sidebar__widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="sidebar__widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'saqrnews_widgets_init' );

function saqrnews_scripts() {
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/earlyaccess/droidarabickufi.css');

  wp_enqueue_style( 'saqrnews-style', get_stylesheet_uri(), false, time());

  wp_enqueue_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', '20151215', true );

  wp_enqueue_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', '20151215', true );

  wp_enqueue_script( 'saqrnews-main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'saqrnews_scripts' );

// the most viewed posts
function wpb_set_post_views($postID) {
  $count_key = 'wpb_post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
  if ( !is_single() ) return;
  if ( empty ( $post_id) ) {
      global $post;
      $post_id = $post->ID;    
  }
  wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
  $count_key = 'wpb_post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
  }
  return $count.' Views';
}
?>