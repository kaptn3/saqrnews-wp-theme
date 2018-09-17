<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<aside id="secondary" class="sidebar">
  <h2 class="sidebar__widget-title">Last News</h2>
      <div class="sidebar__posts">
        <?php 
        $args = array(
          'posts_per_page' => 4
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('templates/widget-sidebar-1');
          }
        }
        wp_reset_postdata(); ?>
      </div>

      <div class="sidebar__top-posts">
        <h2 class="sidebar__widget-title sidebar__header-top-posts">Top posts</h2>
        <?php 
        $args = array(
          'posts_per_page' => 2
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('templates/widget-sidebar-2');
          }
        }
        wp_reset_postdata(); ?>
      </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
