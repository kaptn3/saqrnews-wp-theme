<?php get_header(); ?>

    <div class="wrapper">
      <div class="posts">
        <?php 
        $args = array(
          'orderby' => 'rand',
          'posts_per_page' => 4
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('templates/post-card');
          }
        }
        wp_reset_postdata(); ?>
      </div>
    </div>

<?php get_footer(); ?>