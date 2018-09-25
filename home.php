<?php get_header(); ?>

<div class="wrapper">
  <section class="posts">
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
  </section>

  <?php 
  $category_id = 1;
  if (get_cat_name($category_id)) {
  ?>
    <section class="category-block">
      <header class="posts-list-title">
        <h2><?php echo get_cat_name($category_id); ?></h2>
      </header>
      <div class="category-posts">
        <?php 
        $args = array(
          'category_in' => $category_id,
          'orderby' => 'rand',
          'posts_per_page' => 11,
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            if ( ($query->current_post === 6) || ($query->current_post === 0) || ($query->current_post === 1) ) {
              get_template_part('templates/post-card'); # большие карточки в позициях 0, 1, 6 выводятся с количеством комментариев
            } else {
              get_template_part('templates/post-card-no-comments'); # без количетсва комментариев
            }
          }
        }
        wp_reset_postdata(); ?>
      </div>
    </section>

    <section class="last-news">
        <header class="posts-list-title">
          <h2>Last News</h2>
        </header>
        <?php
        if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
            get_template_part('templates/post-list-card');
          endwhile;
        endif;
        ?>
    </section>
  <?php
  }
  ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>