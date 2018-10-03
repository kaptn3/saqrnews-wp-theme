<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<aside id="secondary" class="sidebar">
  <h2 class="sidebar__widget-title">آخر الأخبار</h2>
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
        <h2 class="sidebar__widget-title sidebar__header-top-posts">أعلى المشاركات</h2>
        <?php 
        $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post();
        
        get_template_part('templates/widget-sidebar-2');
        
        endwhile;
        ?>

      </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
